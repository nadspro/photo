<?php

/**
 * This is the model class for table "pic".
 *
 * The followings are the available columns in table 'pic':
 * @property integer $id
 * @property string $photo_file_name
 * @property string $photo_content_type
 * @property string $photo_data
 * @property integer $photo_file_size
 */
class Pic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pic the static model class
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
		return 'pic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('photo_file_size', 'numerical', 'integerOnly'=>true),
			array('photo_file_name, photo_content_type', 'length', 'max'=>255),
			array('photo_data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('photo_data', 'file', 'types'=>'jpg, gif, png', 'allowEmpty' => true),
			array('id, photo_file_name, photo_content_type, photo_data, photo_file_size', 'safe', 'on'=>'search'),
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
			'photo_file_name' => 'Photo File Name',
			'photo_content_type' => 'Photo Content Type',
			'photo_data' => 'Photo Data',
			'photo_file_size' => 'Photo File Size',
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
		$criteria->compare('photo_file_name',$this->photo_file_name,true);
		$criteria->compare('photo_content_type',$this->photo_content_type,true);
		$criteria->compare('photo_data',$this->photo_data,true);
		$criteria->compare('photo_file_size',$this->photo_file_size);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}