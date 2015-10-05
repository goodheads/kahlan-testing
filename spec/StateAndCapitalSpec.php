<?php

namespace Busayo\Spec;

use Busayo\StateAndCapital;

describe('states and Capital', function() {
  describe('all', function() {
    it('should be a collection of strings in an array', function() {
      $result = StateAndCapital::all();
      expect($result)->toBeA('array');
    });
  });

  describe('Each City', function() {
    it('should return `Ikeja` as the Capital of `Lagos`', function() {
      $result = StateAndCapital::getCity('Lagos');
      expect($result)->toEqual('Ikeja');
    });
  });
});

?>