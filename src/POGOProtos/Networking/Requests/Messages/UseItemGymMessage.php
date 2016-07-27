<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Messages/UseItemGymMessage.php');

namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Networking.Requests.Messages.UseItemGymMessage
  final class UseItemGymMessage extends ProtobufMessage {

    private $_unknown;
    private $itemId = ItemId::ITEM_UNKNOWN; // optional .POGOProtos.Inventory.Item.ItemId item_id = 1
    private $gymId = ""; // optional string gym_id = 2
    private $playerLatitude = 0; // optional double player_latitude = 3
    private $playerLongitude = 0; // optional double player_longitude = 4

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
          case 1: // optional .POGOProtos.Inventory.Item.ItemId item_id = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->itemId = $tmp;

            break;
          case 2: // optional string gym_id = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->gymId = $tmp;

            break;
          case 3: // optional double player_latitude = 3
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->playerLatitude = $tmp;

            break;
          case 4: // optional double player_longitude = 4
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->playerLongitude = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->itemId !== ItemId::ITEM_UNKNOWN) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->itemId);
      }
      if ($this->gymId !== "") {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, strlen($this->gymId));
        fwrite($fp, $this->gymId);
      }
      if ($this->playerLatitude !== 0) {
        fwrite($fp, "\x19", 1);
        Protobuf::write_double($fp, $this->playerLatitude);
      }
      if ($this->playerLongitude !== 0) {
        fwrite($fp, "!", 1);
        Protobuf::write_double($fp, $this->playerLongitude);
      }
    }

    public function size() {
      $size = 0;
      if ($this->itemId !== ItemId::ITEM_UNKNOWN) {
        $size += 1 + Protobuf::size_varint($this->itemId);
      }
      if ($this->gymId !== "") {
        $l = strlen($this->gymId);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->playerLatitude !== 0) {
        $size += 9;
      }
      if ($this->playerLongitude !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearItemId() { $this->itemId = ItemId::ITEM_UNKNOWN; }
    public function getItemId() { return $this->itemId;}
    public function setItemId($value) { $this->itemId = $value; }

    public function clearGymId() { $this->gymId = ""; }
    public function getGymId() { return $this->gymId;}
    public function setGymId($value) { $this->gymId = $value; }

    public function clearPlayerLatitude() { $this->playerLatitude = 0; }
    public function getPlayerLatitude() { return $this->playerLatitude;}
    public function setPlayerLatitude($value) { $this->playerLatitude = $value; }

    public function clearPlayerLongitude() { $this->playerLongitude = 0; }
    public function getPlayerLongitude() { return $this->playerLongitude;}
    public function setPlayerLongitude($value) { $this->playerLongitude = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('item_id', $this->itemId, ItemId::ITEM_UNKNOWN)
           . Protobuf::toString('gym_id', $this->gymId, "")
           . Protobuf::toString('player_latitude', $this->playerLatitude, 0)
           . Protobuf::toString('player_longitude', $this->playerLongitude, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.UseItemGymMessage)
  }

}