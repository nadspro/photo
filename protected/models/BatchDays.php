<?php

/**
 * This is the model class for table "batch_days".
 *
 * The followings are the available columns in table 'batch_days':
 * @property integer $id
 * @property integer $batch_id
 * @property string $monday
 * @property string $tuesday
 * @property string $wednesday
 * @property string $thursday
 * @property string $friday
 * @property string $saturday
 * @property string $sunday
 */
class BatchDays extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BatchDays the static model class
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
		return 'batch_days';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('batch_id', 'numerical', 'integerOnly'=>true),
			array('monday, tuesday, wednesday, thursday, friday, saturday, sunday', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, batch_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday', 'safe', 'on'=>'search'),
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
			'batch_id' => 'Batch',
			'monday' => 'Monday',
			'tuesday' => 'Tuesday',
			'wednesday' => 'Wednesday',
			'thursday' => 'Thursday',
			'friday' => 'Friday',
			'saturday' => 'Saturday',
			'sunday' => 'Sunday',
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
		$criteria->compare('batch_id',$this->batch_id);
		$criteria->compare('monday',$this->monday,true);
		$criteria->compare('tuesday',$this->tuesday,true);
		$criteria->compare('wednesday',$this->wednesday,true);
		$criteria->compare('thursday',$this->thursday,true);
		$criteria->compare('friday',$this->friday,true);
		$criteria->compare('saturday',$this->saturday,true);
		$criteria->compare('sunday',$this->sunday,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}