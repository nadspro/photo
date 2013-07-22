<?php

/**
 * This is the model class for table "sub_topic".
 *
 * The followings are the available columns in table 'sub_topic':
 * @property integer $id
 * @property integer $class_id
 * @property integer $sub_id
 * @property integer $sub_section_id
 * @property string $topic_name
 * @property double $duration_hours
 * @property integer $prof_id
 *
 * The followings are the available model relations:
 * @property SubSubTopic[] $subSubTopics
 * @property SubSection $subSection
 */
class SubTopic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubTopic the static model class
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
		return 'sub_topic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('class_id, sub_id', 'required'),
			array('class_id, sub_id, sub_section_id, prof_id', 'numerical', 'integerOnly'=>true),
			array('duration_hours', 'numerical'),
			array('topic_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, class_id, sub_id, sub_section_id, topic_name, duration_hours, prof_id', 'safe', 'on'=>'search'),
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
			'subSubTopics' => array(self::HAS_MANY, 'SubSubTopic', 'sub_topic_id'),
			'subSection' => array(self::BELONGS_TO, 'SubSection', 'sub_section_id'),
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
			'sub_id' => 'Sub',
			'sub_section_id' => 'Sub Section',
			'topic_name' => 'Topic Name',
			'duration_hours' => 'Duration Hours',
			'prof_id' => 'Prof',
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
		$criteria->compare('sub_id',$this->sub_id);
		$criteria->compare('sub_section_id',$this->sub_section_id);
		$criteria->compare('topic_name',$this->topic_name,true);
		$criteria->compare('duration_hours',$this->duration_hours);
		$criteria->compare('prof_id',$this->prof_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}