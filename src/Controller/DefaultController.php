<?php

namespace Drupal\lovak\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {


  /**
   * Hello.
   *
   * @return array
   *   Return Hello string.
   */
  public function elokesz() {

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => '?',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'AH',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'AT',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'BE',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'CA',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'CS',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'CZ',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'DE',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'DK',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'EE',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'FI',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'FR',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'HR',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'HU',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'n.a.',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'NL',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'NO',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'NZ',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'RO',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'RS',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'RU',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SE',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SI',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SK',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SR',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SU',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'UA',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'US',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'YU',]); $term->save();
  
    
    return [
      '#type' => 'markup',
      '#markup' => $this->t('<h2>Elokeszites</h2>')
      . '<code><?php<br>JZnamespace Drupal\lovak\Controller;<br>'
      . 'use Drupal\Core\Controller\ControllerBase;<br><br>'
      . 'class DefaultController extends ControllerBase {<br>'
      . '&nbsp;&nbsp;public function hello() {<br>'
      . '&nbsp;&nbsp;&nbsp;&nbsp;return [<br>'
      . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\'#type\' => \'markup\',<br>'
      . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\'#markup\' => $this->t(\'Lovak\')<br>'
      . '&nbsp;&nbsp;&nbsp;&nbsp;];<br>&nbsp;&nbsp;}<br>}</code>',
    ];
  }

}
