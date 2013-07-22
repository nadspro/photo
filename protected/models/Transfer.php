<?php

/**
 * This is the model class for table "transfer".
 *
 * The followings are the available columns in table 'transfer':
 * @property integer $id
 * @property integer $s_id
 * @property string $s_name
 * @property string $from
 * @property string $to
 * @property string $absent_inform
 * @property string $present
 * @property string $date
 */
class Transfer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transfer the static model class
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
		return 'transfer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, s_id', 'numerical', 'integerOnly'=>true),
			array('s_name, from_, to_', 'length', 'max'=>256),
			array('absent_inform, present, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, s_id, s_name, from_, to_, absent_inform, present, date', 'safe', 'on'=>'search'),
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
			's_id' => 'S',
			's_name' => 'S Name',
			'from_' => 'From',
			'to_' => 'To',
			'absent_inform' => 'Absent Inform',
			'present' => 'Present',
			'date' => 'Date',
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
		$criteria->compare('s_id',$this->s_id);
		$criteria->compare('s_name',$this->s_name,true);
		$criteria->compare('from_',$this->from_,true);
		$criteria->compare('to_',$this->to_,true);
		$criteria->compare('absent_inform',$this->absent_inform,true);
		$criteria->compare('present',$this->present,true);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}