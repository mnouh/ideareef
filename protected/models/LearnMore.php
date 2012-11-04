<?php

/**
 * This is the model class for table "{{learnMore}}".
 *
 * The followings are the available columns in table '{{learnMore}}':
 * @property integer $id
 * @property string $email
 */
class LearnMore extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LearnMore the static model class
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
		return '{{learnMore}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email', 'required'),
			array('email', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('email', 'safe', 'on'=>'search'),
		);
	}
        
        
        /**
         * Check if User already exists in the database.
         * @param type $attribute
         * @param type $params 
         */
        public function checkEmail($attribute, $params) {
            
            $user=$this->find('LOWER(email)=?',array(strtolower($this->email)));
		
                if($user!=null) {
                    
                    $this->addError('email', '<b>&#10006;</b> &nbsp; This email already exists.');
                    //$this->addError('confirmEmail', '<b>&#10006;</b> &nbsp; This email already exists.');
    
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
			'email' => 'Email',
		);
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
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}