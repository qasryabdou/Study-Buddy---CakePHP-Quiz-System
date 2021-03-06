<?php
/* QuestionQuiz Fixture generated on: 2011-08-18 16:02:19 : 1313683339 */
class QuestionQuizFixture extends CakeTestFixture {
	var $name = 'QuestionQuiz';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'question_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'quiz_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'answer' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'question_id' => 1,
			'quiz_id' => 1,
			'answer' => 1
		),
	);
}
