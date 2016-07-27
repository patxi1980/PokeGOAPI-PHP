<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/DownloadSettingsResponse.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Networking.Responses.DownloadSettingsResponse
  final class DownloadSettingsResponse extends ProtobufMessage {

    private $_unknown;
    private $error = ""; // optional string error = 1
    private $hash = ""; // optional string hash = 2
    private $settings = null; // optional .POGOProtos.Settings.GlobalSettings settings = 3

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
          case 1: // optional string error = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->error = $tmp;

            break;
          case 2: // optional string hash = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->hash = $tmp;

            break;
          case 3: // optional .POGOProtos.Settings.GlobalSettings settings = 3
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->settings = new \POGOProtos\Settings\GlobalSettings($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\GlobalSettings did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->error !== "") {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($this->error));
        fwrite($fp, $this->error);
      }
      if ($this->hash !== "") {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, strlen($this->hash));
        fwrite($fp, $this->hash);
      }
      if ($this->settings !== null) {
        fwrite($fp, "\x1a", 1);
        Protobuf::write_varint($fp, $this->settings->size());
        $this->settings->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->error !== "") {
        $l = strlen($this->error);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->hash !== "") {
        $l = strlen($this->hash);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->settings !== null) {
        $l = $this->settings->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearError() { $this->error = ""; }
    public function getError() { return $this->error;}
    public function setError($value) { $this->error = $value; }

    public function clearHash() { $this->hash = ""; }
    public function getHash() { return $this->hash;}
    public function setHash($value) { $this->hash = $value; }

    public function clearSettings() { $this->settings = null; }
    public function getSettings() { return $this->settings;}
    public function setSettings(\POGOProtos\Settings\GlobalSettings $value) { $this->settings = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('error', $this->error, "")
           . Protobuf::toString('hash', $this->hash, "")
           . Protobuf::toString('settings', $this->settings, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.DownloadSettingsResponse)
  }

}