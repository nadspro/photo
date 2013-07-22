<?php

/**
 * This is the model class for table "batch_subjects_time".
 *
 * The followings are the available columns in table 'batch_subjects_time':
 * @property integer $id
 * @property integer $batch_id
 * @property integer $class_id
 * @property string $bs_time
 * @property string $bs_day
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $sub_id
 * @property string $board
 */
class BatchSubjectsTime extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BatchSubjectsTime the static model class
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
		return 'batch_subjects_time';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, sub_id, board', 'required'),
			array('batch_id, class_id, sub_id', 'numerical', 'integerOnly'=>true),
			array('board', 'length', 'max'=>30),
			array('bs_time, bs_day, updated_at, deleted_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, batch_id, class_id, bs_time, bs_day, created_at, updated_at, deleted_at, sub_id, board', 'safe', 'on'=>'search'),
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
			'class_id' => 'Class',
			'bs_time' => 'Bs Time',
			'bs_day' => 'Bs Day',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'deleted_at' => 'Deleted At',
			'sub_id' => 'Sub',
			'board' => 'Board',
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
		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('bs_time',$this->bs_time,true);
		$criteria->compare('bs_day',$this->bs_day,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('deleted_at',$this->deleted_at,true);
		$criteria->compare('sub_id',$this->sub_id);
		$criteria->compare('board',$this->board,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}