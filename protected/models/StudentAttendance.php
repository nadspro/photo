<?php

/**
 * This is the model class for table "student_attendance".
 *
 * The followings are the available columns in table 'student_attendance':
 * @property integer $id
 * @property integer $s_id
 * @property string $name
 * @property string $present
 * @property string $absent_inform
 * @property string $date
 */
class StudentAttendance extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StudentAttendance the static model class
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
		return 'student_attendance';
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
			array('name', 'length', 'max'=>256),
			array('present, absent_inform, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, s_id, name, present, absent_inform, date', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'present' => 'Present',
			'absent_inform' => 'Absent Inform',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('present',$this->present,true);
		$criteria->compare('absent_inform',$this->absent_inform,true);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}