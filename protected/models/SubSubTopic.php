<?php

/**
 * This is the model class for table "sub_sub_topic".
 *
 * The followings are the available columns in table 'sub_sub_topic':
 * @property integer $id
 * @property integer $sub_topic_id
 * @property string $sub_topic_name
 *
 * The followings are the available model relations:
 * @property SubTopic $subTopic
 */
class SubSubTopic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubSubTopic the static model class
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
		return 'sub_sub_topic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sub_topic_id', 'numerical', 'integerOnly'=>true),
			array('sub_topic_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sub_topic_id, sub_topic_name', 'safe', 'on'=>'search'),
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
			'subTopic' => array(self::BELONGS_TO, 'SubTopic', 'sub_topic_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sub_topic_id' => 'Sub Topic',
			'sub_topic_name' => 'Sub Topic Name',
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
		$criteria->compare('sub_topic_id',$this->sub_topic_id);
		$criteria->compare('sub_topic_name',$this->sub_topic_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}