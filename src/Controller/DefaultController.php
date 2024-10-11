<?php

namespace Drupal\lovak\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\taxonomy\Entity\Vocabulary;

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
  
  $vocabulary = Vocabulary::create([
  'vid' => 'elfogadas', // Egyedi azonosító a szótárhoz
  'description' => 'ÁSZF elfogadása',
  'name' => 'Elfogadás',
  ]);
  $vocabulary->save();

  $vocabulary = Vocabulary::create([
  'vid' => 'fedezomen', // Egyedi azonosító a szótárhoz
  'description' => 'Fedezömén',
  'name' => 'Fedezömén',
  ]);
  $vocabulary->save();
    
  $vocabulary = Vocabulary::create([
  'vid' => 'orszag', // Egyedi azonosító a szótárhoz
  'description' => 'Orszag',
  'name' => 'Ország',
  ]);
  $vocabulary->save();

  $vocabulary = Vocabulary::create([
  'vid' => 'szine', // Egyedi azonosító a szótárhoz
  'description' => 'Lo szine',
  'name' => 'Ló szine',
  ]);
  $vocabulary->save();

  $vocabulary = Vocabulary::create([
  'vid' => 'neme', // Egyedi azonosító a szótárhoz
  'description' => 'Lo neme',
  'name' => 'Ló neme',
  ]);
  $vocabulary->save();  

  $vocabulary = Vocabulary::create([
  'vid' => 'hirek', // Egyedi azonosító a szótárhoz
  'description' => 'hírek',
  'name' => 'hírek',
  ]);
  $vocabulary->save();    

  $vocabulary = Vocabulary::create([
  'vid' => 'lo_vagy_fed', // Egyedi azonosító a szótárhoz
  'description' => 'ló vagy fedeztetés vagy sikertelen fedezetetés',
  'name' => 'Ló vagy Fedeztetés',
  ]);
  $vocabulary->save();      
  
  $vocabulary = Vocabulary::create([
  'vid' => 'publikaciok', // Egyedi azonosító a szótárhoz
  'description' => 'Publikációk',
  'name' => 'Publikációk',
  ]);
  $vocabulary->save();        
    
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

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'neme','name' => '?',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'neme','name' => 'h',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'neme','name' => 'k',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'neme','name' => 'm',]); $term->save();


  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => '?',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'f',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'f/sz',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'p',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'p/stp',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'p/vlp',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 's',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'stp',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'stp/f',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'stp/sz',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'sz',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'sz/stp',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'tarka',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'vlp',]); $term->save();

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'fedezomen','name' => '?',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'fedezomen','name' => 'IGEN',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'fedezomen','name' => 'NEM',]); $term->save();

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Egyéb hírek',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Lovaregylet hírei',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Szolgáltatások',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Tenyésztés',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Versenyzés',]); $term->save(); 

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'lo_vagy_fed','name' => '?',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'lo_vagy_fed','name' => 'FEDEZTETES',]); $term->save();   
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'lo_vagy_fed','name' => 'LO',]); $term->save();   
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'lo_vagy_fed','name' => 'SIKERTELEN FEDEZTETES',]); $term->save();     

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'egyéb publikációk',]); $term->save();  
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'idézetek',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'Lovaregylet publikációi',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'saját publikációk',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'tudományos linkek',]); $term->save();  
  

    
    
    
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
