<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Data/Capture/CaptureAward.php');

namespace POGOProtos\Data\Capture {

  use Protobuf;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Data.Capture.CaptureAward
  final class CaptureAward extends ProtobufMessage {

    private $_unknown;
    private $activityType = array(); // repeated .POGOProtos.Enums.ActivityType activity_type = 1
    private $xp = array(); // repeated int32 xp = 2
    private $candy = array(); // repeated int32 candy = 3
    private $stardust = array(); // repeated int32 stardust = 4

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
          case 1: // repeated .POGOProtos.Enums.ActivityType activity_type = 1
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              $this->activityType[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                $this->activityType[] = $tmp;
              }
            }

            break;
          case 2: // repeated int32 xp = 2
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->xp[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->xp[] = $tmp;
              }
            }

            break;
          case 3: // repeated int32 candy = 3
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->candy[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->candy[] = $tmp;
              }
            }

            break;
          case 4: // repeated int32 stardust = 4
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->stardust[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->stardust[] = $tmp;
              }
            }

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      foreach($this->activityType as $v) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->xp as $v) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->candy as $v) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->stardust as $v) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $v);
      }
    }

    public function size() {
      $size = 0;
      foreach($this->activityType as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->xp as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->candy as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->stardust as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearActivityType() { $this->activityType = array(); }
    public function getActivityTypeCount() { return count($this->activityType); }
    public function getActivityType($index) { return $this->activityType[$index]; }
    public function getActivityTypeArray() { return $this->activityType; }
    public function setActivityType($index, array $value) {$this->activityType[$index] = $value; }
    public function addActivityType(array $value) { $this->activityType[] = $value; }
    public function addAllActivityType(array $values) { foreach($values as $value) {$this->activityType[] = $value; }}

    public function clearXp() { $this->xp = array(); }
    public function getXpCount() { return count($this->xp); }
    public function getXp($index) { return $this->xp[$index]; }
    public function getXpArray() { return $this->xp; }
    public function setXp($index, array $value) {$this->xp[$index] = $value; }
    public function addXp(array $value) { $this->xp[] = $value; }
    public function addAllXp(array $values) { foreach($values as $value) {$this->xp[] = $value; }}

    public function clearCandy() { $this->candy = array(); }
    public function getCandyCount() { return count($this->candy); }
    public function getCandy($index) { return $this->candy[$index]; }
    public function getCandyArray() { return $this->candy; }
    public function setCandy($index, array $value) {$this->candy[$index] = $value; }
    public function addCandy(array $value) { $this->candy[] = $value; }
    public function addAllCandy(array $values) { foreach($values as $value) {$this->candy[] = $value; }}

    public function clearStardust() { $this->stardust = array(); }
    public function getStardustCount() { return count($this->stardust); }
    public function getStardust($index) { return $this->stardust[$index]; }
    public function getStardustArray() { return $this->stardust; }
    public function setStardust($index, array $value) {$this->stardust[$index] = $value; }
    public function addStardust(array $value) { $this->stardust[] = $value; }
    public function addAllStardust(array $values) { foreach($values as $value) {$this->stardust[] = $value; }}

    public function __toString() {
      return ''
           . Protobuf::toString('activity_type', $this->activityType, ActivityType::ACTIVITY_UNKNOWN)
           . Protobuf::toString('xp', $this->xp, 0)
           . Protobuf::toString('candy', $this->candy, 0)
           . Protobuf::toString('stardust', $this->stardust, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.Capture.CaptureAward)
  }

}