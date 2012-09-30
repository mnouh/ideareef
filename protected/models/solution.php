<?php

/**
 * This is the model class for table "{{solution}}".
 * test
 * The followings are the available columns in table '{{solution}}':
 * @property integer $id
 * @property integer $competitionId
 * @property integer $userId
 * @property integer $businessId
 * @property string $submit_time
 */
class Solution extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return solution the static model class
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
		return '{{solution}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, competitionId, userId, businessId, submitTime', 'required'),
			array('id, competitionId, userId, businessId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, competitionId, userId, businessId, submitTime', 'safe', 'on'=>'search'),
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
                    'competition' => array(self::BELONGS_TO,'Competition', 'competitionId'),
                    'userSubmit'=> array(self::BELONGS_TO,'User', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'competitionId' => 'Competition',
			'userId' => 'User',
			'businessId' => 'Business',
			'submitTime' => 'Submit Time',
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
		$criteria->compare('competitionId',$this->competitionId);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('businessId',$this->businessId);
		$criteria->compare('submitTime',$this->submit_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}