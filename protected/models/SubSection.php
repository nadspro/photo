<?php

/**
 * This is the model class for table "sub_section".
 *
 * The followings are the available columns in table 'sub_section':
 * @property integer $id
 * @property integer $sub_id
 * @property string $section_name
 * @property integer $class_id
 *
 * The followings are the available model relations:
 * @property Subjects $sub
 * @property SubTopic[] $subTopics
 */
class SubSection extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubSection the static model class
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
		return 'sub_section';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('class_id', 'required'),
			array('sub_id, class_id', 'numerical', 'integerOnly'=>true),
			array('section_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sub_id, section_name, class_id', 'safe', 'on'=>'search'),
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
			'sub' => array(self::BELONGS_TO, 'Subjects', 'sub_id'),
			'subTopics' => array(self::HAS_MANY, 'SubTopic', 'sub_section_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sub_id' => 'Sub',
			'section_name' => 'Section Name',
			'class_id' => 'Class',
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
		$criteria->compare('sub_id',$this->sub_id);
		$criteria->compare('section_name',$this->section_name,true);
		$criteria->compare('class_id',$this->class_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}