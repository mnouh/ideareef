<?php

class ApiController extends Controller
{
    // Members
    /**
     * Key which has to be in HTTP USERNAME and PASSWORD headers 
     */
    Const APPLICATION_ID = 'ASCCPE';
 
    /**
     * Default response format
     * either 'json' or 'xml'
     */
    private $format = 'json';
    /**
     * @return array action filters
     */
    public function filters()
    {
            return array();
    }
 
    // Actions
    public function actionList()
    {
    }
    
    public function actionView()
    {
    }
    
    public function actionCreate()
    {
        
    }
    
    public function actionUpdate()
    {
    }
    
    public function actionDelete()
    {
    }
    
    public function actionLogIn() {
        
        if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $_SERVER['HTTP_X_EMAIL'] = $_POST["email"];
        $_SERVER['HTTP_X_PASSWORD'] = $_POST["password"];
        $this->_checkAuth();

        $params = array($email, $password);
        $this->_sendResponse(200, CJSON::encode($params));
        }
        else {
            
            $this->_sendResponse(401, "The post variables are not set");
        }
    }
    
    public function actionCompetitions() {
        $criteria = new CDbCriteria;
        $criteria->limit = $_POST["limit"];
        
        if ($_POST["order"] == 0) $criteria->order = 't.createTime ASC';
        else $criteria->order = 't.createTime DESC';
        
        $competition = Competition::model()->findAll($criteria);

        $this->_sendResponse(200, CJSON::encode($competition));
    }
    
    private function _checkAuth() {
        // Check if we have the USERNAME and PASSWORD HTTP headers set?
        if (!(isset($_SERVER['HTTP_X_EMAIL']) and isset($_SERVER['HTTP_X_PASSWORD']))) {
            // Error: Unauthorized
            $this->_sendResponse(401);
        }
        $email = $_SERVER['HTTP_X_EMAIL'];
        $password = $_SERVER['HTTP_X_PASSWORD'];
        // Find the user
        $user = User::model()->find('LOWER(email)=?', array(strtolower($email)));
        if ($user === null) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: Email is invalid');
        } else if (!$user->validatePassword($password)) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: Password is invalid');
        }
    }
    
    private function _sendResponse($status = 200, $body = '', $content_type = 'text/html') {
        // set the status
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        header($status_header);
        // and the content type
        header('Content-type: ' . $content_type);

        // pages with body are easy
        if ($body != '') {
            // send the body
            echo $body;
        }
        // we need to create the body if none is passed
        else {
            // create some body messages
            $message = '';

            // this is purely optional, but makes the pages a little nicer to read
            // for your users.  Since you won't likely send a lot of different status codes,
            // this also shouldn't be too ponderous to maintain
            switch ($status) {
                case 401:
                    $message = 'You must be authorized to view this page.';
                    break;
                case 404:
                    $message = 'The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found.';
                    break;
                case 500:
                    $message = 'The server encountered an error processing your request.';
                    break;
                case 501:
                    $message = 'The requested method is not implemented.';
                    break;
            }

            // servers don't always have a signature turned on 
            // (this is an apache directive "ServerSignature On")
            $signature = ($_SERVER['SERVER_SIGNATURE'] == '') ? $_SERVER['SERVER_SOFTWARE'] . ' Server at ' . $_SERVER['SERVER_NAME'] . ' Port ' . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_SIGNATURE'];

            // this should be templated in a real-world solution
            $body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
                    <html>
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
                        <title>' . $status . ' ' . $this->_getStatusCodeMessage($status) . '</title>
                    </head>
                    <body>
                        <h1>' . $this->_getStatusCodeMessage($status) . '</h1>
                        <p>' . $message . '</p>
                        <hr />
                        <address>' . $signature . '</address>
                    </body>
                    </html>';

            echo $body;
        }
        Yii::app()->end();
    }
    
    private function _getStatusCodeMessage($status) {
        // these could be stored in a .ini file and loaded
        // via parse_ini_file()... however, this will suffice
        // for an example
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }
}
