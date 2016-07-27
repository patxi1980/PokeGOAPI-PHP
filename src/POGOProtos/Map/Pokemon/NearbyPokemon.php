<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Map/Pokemon/NearbyPokemon.php');

namespace POGOProtos\Map\Pokemon {

  use Protobuf;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Map.Pokemon.NearbyPokemon
  final class NearbyPokemon extends ProtobufMessage {

    private $_unknown;
    private $pokemonId = PokemonId::MISSINGNO; // optional .POGOProtos.Enums.PokemonId pokemon_id = 1
    private $distanceInMeters = 0; // optional float distance_in_meters = 2
    private $encounterId = 0; // optional fixed64 encounter_id = 3

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Enums.PokemonId pokemon_id = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->pokemonId = $tmp;

            break;
          case 2: // optional float distance_in_meters = 2
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->distanceInMeters = $tmp;

            break;
          case 3: // optional fixed64 encounter_id = 3
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_uint64($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_unint64 returned false');
            $this->encounterId = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->pokemonId !== PokemonId::MISSINGNO) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->pokemonId);
      }
      if ($this->distanceInMeters !== 0) {
        fwrite($fp, "\x15", 1);
        Protobuf::write_float($fp, $this->distanceInMeters);
      }
      if ($this->encounterId !== 0) {
        fwrite($fp, "\x19", 1);
        Protobuf::write_uint64($fp, $this->encounterId);
      }
    }

    public function size() {
      $size = 0;
      if ($this->pokemonId !== PokemonId::MISSINGNO) {
        $size += 1 + Protobuf::size_varint($this->pokemonId);
      }
      if ($this->distanceInMeters !== 0) {
        $size += 5;
      }
      if ($this->encounterId !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearPokemonId() { $this->pokemonId = PokemonId::MISSINGNO; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function clearDistanceInMeters() { $this->distanceInMeters = 0; }
    public function getDistanceInMeters() { return $this->distanceInMeters;}
    public function setDistanceInMeters($value) { $this->distanceInMeters = $value; }

    public function clearEncounterId() { $this->encounterId = 0; }
    public function getEncounterId() { return $this->encounterId;}
    public function setEncounterId($value) { $this->encounterId = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('pokemon_id', $this->pokemonId, PokemonId::MISSINGNO)
           . Protobuf::toString('distance_in_meters', $this->distanceInMeters, 0)
           . Protobuf::toString('encounter_id', $this->encounterId, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Map.Pokemon.NearbyPokemon)
  }

}