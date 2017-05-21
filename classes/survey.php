<?php

/**
 *
 */
class Survey
{

  private $_db;

  function __construct($db)
  {
    $this->_db = $db;
  }

  public function getAnswers() {
    try {
      $q = $this->_db->prepare('SELECT * FROM survey');
      $q->execute();
      return $q->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      echo '<p>'.$e->getMessage().'</p>';
    }
  }

  public function saveAnswer($id) {
    try {
      $q = $this->_db->prepare('UPDATE survey SET nb_answer = nb_answer + 1 WHERE id = :id;');
      $q->execute(array(
        ':id' => $id
      ));
    } catch (Exception $e) {
      echo '<p>'.$e->getMessage().'</p>';
    }
  }

  public function getTotalAnswer() {
    try {
      $q = $this->_db->prepare('SELECT SUM(nb_answer) AS "totalAnswer" FROM survey;');
      $q->execute();
      return $q->fetch(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo '<p>'.$e->getMessage().'</p>';
    }
  }
}
