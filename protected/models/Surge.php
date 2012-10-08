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
class Surge extends CActiveRecord
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
		return '{{surge}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, startDate, description, ', 'required', 'message' => '&#10006; &nbsp; A {attribute} is required.'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('startDate, description', 'safe', 'on'=>'search'),
		);      
	}
        
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                     'solutions' => array(self::HAS_MANY,'SurgeSolution', 'surgeId'),
                     'businessOwner' => array(self::BELONGS_TO,'Business', 'businessId'),
                     'solutionCount' => array(self::STAT, 'SurgeSolution', 'surgeId'),
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
			'description' => 'Description',
			
		);
	}
        
        
        public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('businessId',$this->businessId);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('name',$this->name,true);
	
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
