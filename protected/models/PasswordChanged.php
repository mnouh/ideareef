<?php

/**
 * This is the model class for table "{{passwordChanged}}".
 *
 * The followings are the available columns in table '{{passwordChanged}}':
 * @property integer $id
 * @property integer $userId
 * @property string $dateChanged
 * @property string $ipAddress
 * @property integer $isBusiness
 */
class PasswordChanged extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PasswordChanged the static model class
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
		return '{{passwordChanged}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
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
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userId' => 'User',
			'dateChanged' => 'Date Changed',
			'ipAddress' => 'Ip Address',
			'isBusiness' => 'Is Business',
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
		$criteria->compare('userId',$this->userId);
		$criteria->compare('dateChanged',$this->dateChanged,true);
		$criteria->compare('ipAddress',$this->ipAddress,true);
		$criteria->compare('isBusiness',$this->isBusiness);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}