<?php

/**
 * This is the model class for table "{{competition}}".
 *
 * The followings are the available columns in table '{{competition}}':
 * @property integer $id
 * @property integer $businessId
 * @property string $startDate
 * @property string $endDate
 * @property string $description
 * @property string $solutionDescription
 * @property double $amount
 * @property integer $anonymous
 * @property integer $openSolutions
 * @property integer $publicVoting
 * @property integer $commentsEnabled
 * @property integer $acceptMultipleSolutions
 */
class Competition extends CActiveRecord
{
    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Competition the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{competition}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, startDate, endDate, description, solutionDescription, publicVoting', 'required', 'message' => '&#10006; &nbsp; A {attribute} is required.'),
			array('anonymous, openSolutions, publicVoting, commentsEnabled, acceptMultipleSolutions', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
                        //array('startDate, endDate', 'type', 'type' => 'date' ),
                        array('awardMonetary', 'in','range'=>array('0','1')),
                        array('amount', 'monetaryAward'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('startDate, endDate, description, solutionDescription, amount, anonymous, openSolutions, publicVoting, commentsEnabled, acceptMultipleSolutions', 'safe', 'on'=>'search'),
		);      
	}
        
        public function monetaryAward($attributes, $params) {
            
            if($this->awardMonetary == 1) {
                
                if($this->amount == NULL)
                    $this->addError('amount', '&#10006; &nbsp; A dollar amount is required');
            }
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'name' => 'Competition Name',
			'businessId' => 'Business',
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'description' => 'Description',
			'solutionDescription' => 'Solution Description',
			'amount' => 'Monetary Amount',
			'anonymous' => 'Anonymous',
			'openSolutions' => 'Open Solutions',
			'publicVoting' => 'Public Voting',
			'commentsEnabled' => 'Comments Enabled',
			'acceptMultipleSolutions' => 'Accept Multiple Solutions',
		);
	}
        
        protected function beforeSave() {

        if ($this->isNewRecord) {

            
            $parseDate = array();
            
            $parseDate = explode("-", $this->startDate);
            
            $this->startDate = $parseDate[2].'-'.$parseDate[0].'-'.$parseDate[1];
            
            
            //$this->start_date = strtotime($this->start_date);
                
                //$myDate = "".$this->start_date;
                $date = new DateTime($this->startDate);
                $this->startDate = $date->format('Y-m-d H:i:s');
                
            $parseEndDate = array();
            
            $parseEndDate = explode("-", $this->endDate);
            
            $this->endDate = $parseEndDate[2].'-'.$parseEndDate[0].'-'.$parseEndDate[1];
            
            $endDate = new DateTime($this->endDate);
            $this->endDate = $endDate->format('Y-m-d H:i:s');
            
            $this->businessId = Yii::app()->user->id;
            
            
            
            
        }


        return parent::beforeSave();
    }

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('businessId',$this->businessId);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('solutionDescription',$this->solutionDescription,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('anonymous',$this->anonymous);
		$criteria->compare('openSolutions',$this->openSolutions);
		$criteria->compare('publicVoting',$this->publicVoting);
		$criteria->compare('commentsEnabled',$this->commentsEnabled);
		$criteria->compare('acceptMultipleSolutions',$this->acceptMultipleSolutions);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}