<?php

/**
 * This is the model class for table "batch".
 *
 * The followings are the available columns in table 'batch':
 * @property integer $id
 * @property integer $class_id
 * @property string $batch_name
 * @property string $sub_batch
 * @property integer $no_of_students
 * @property string $board
 * @property string $school
 * @property string $startdate
 * @property string $timings
 * @property string $enddate
 * @property integer $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Batch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Batch the static model class
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
		return 'batch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('class_id, no_of_students, is_active', 'numerical', 'integerOnly'=>true),
			array('batch_name, sub_batch, board', 'length', 'max'=>55),
			array('school', 'length', 'max'=>255),
			array('startdate, timings, enddate, created_at, updated_at, deleted_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, class_id, batch_name, sub_batch, no_of_students, board, school, startdate, timings, enddate, is_active, created_at, updated_at, deleted_at', 'safe', 'on'=>'search'),
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
			'class_id' => 'Class',
			'batch_name' => 'Batch Name',
			'sub_batch' => 'Sub Batch',
			'no_of_students' => 'No Of Students',
			'board' => 'Board',
			'school' => 'School',
			'startdate' => 'Startdate',
			'timings' => 'Timings',
			'enddate' => 'Enddate',
			'is_active' => 'Is Active',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'deleted_at' => 'Deleted At',
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
		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('batch_name',$this->batch_name,true);
		$criteria->compare('sub_batch',$this->sub_batch,true);
		$criteria->compare('no_of_students',$this->no_of_students);
		$criteria->compare('board',$this->board,true);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('timings',$this->timings,true);
		$criteria->compare('enddate',$this->enddate,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('deleted_at',$this->deleted_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}