<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/Pokemon/StatsAttributes.php');

namespace POGOProtos\Settings\Master\Pokemon {

  use Protobuf;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.Pokemon.StatsAttributes
  final class StatsAttributes extends ProtobufMessage {

    private $_unknown;
    private $baseStamina = 0; // optional int32 base_stamina = 1
    private $baseAttack = 0; // optional int32 base_attack = 2
    private $baseDefense = 0; // optional int32 base_defense = 3
    private $dodgeEnergyDelta = 0; // optional int32 dodge_energy_delta = 8

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
          case 1: // optional int32 base_stamina = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->baseStamina = $tmp;

            break;
          case 2: // optional int32 base_attack = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->baseAttack = $tmp;

            break;
          case 3: // optional int32 base_defense = 3
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->baseDefense = $tmp;

            break;
          case 8: // optional int32 dodge_energy_delta = 8
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->dodgeEnergyDelta = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->baseStamina !== 0) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->baseStamina);
      }
      if ($this->baseAttack !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->baseAttack);
      }
      if ($this->baseDefense !== 0) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $this->baseDefense);
      }
      if ($this->dodgeEnergyDelta !== 0) {
        fwrite($fp, "@", 1);
        Protobuf::write_varint($fp, $this->dodgeEnergyDelta);
      }
    }

    public function size() {
      $size = 0;
      if ($this->baseStamina !== 0) {
        $size += 1 + Protobuf::size_varint($this->baseStamina);
      }
      if ($this->baseAttack !== 0) {
        $size += 1 + Protobuf::size_varint($this->baseAttack);
      }
      if ($this->baseDefense !== 0) {
        $size += 1 + Protobuf::size_varint($this->baseDefense);
      }
      if ($this->dodgeEnergyDelta !== 0) {
        $size += 1 + Protobuf::size_varint($this->dodgeEnergyDelta);
      }
      return $size;
    }

    public function clearBaseStamina() { $this->baseStamina = 0; }
    public function getBaseStamina() { return $this->baseStamina;}
    public function setBaseStamina($value) { $this->baseStamina = $value; }

    public function clearBaseAttack() { $this->baseAttack = 0; }
    public function getBaseAttack() { return $this->baseAttack;}
    public function setBaseAttack($value) { $this->baseAttack = $value; }

    public function clearBaseDefense() { $this->baseDefense = 0; }
    public function getBaseDefense() { return $this->baseDefense;}
    public function setBaseDefense($value) { $this->baseDefense = $value; }

    public function clearDodgeEnergyDelta() { $this->dodgeEnergyDelta = 0; }
    public function getDodgeEnergyDelta() { return $this->dodgeEnergyDelta;}
    public function setDodgeEnergyDelta($value) { $this->dodgeEnergyDelta = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('base_stamina', $this->baseStamina, 0)
           . Protobuf::toString('base_attack', $this->baseAttack, 0)
           . Protobuf::toString('base_defense', $this->baseDefense, 0)
           . Protobuf::toString('dodge_energy_delta', $this->dodgeEnergyDelta, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.Pokemon.StatsAttributes)
  }

}