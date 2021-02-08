<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options defining a file or a set of files within a Google Cloud Storage
 * bucket.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CloudStorageOptions</code>
 */
class CloudStorageOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of one or more files to scan.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudStorageOptions.FileSet file_set = 1;</code>
     */
    private $file_set = null;
    /**
     * Max number of bytes to scan from a file. If a scanned file's size is bigger
     * than this value then the rest of the bytes are omitted. Only one
     * of bytes_limit_per_file and bytes_limit_per_file_percent can be specified.
     *
     * Generated from protobuf field <code>int64 bytes_limit_per_file = 4;</code>
     */
    private $bytes_limit_per_file = 0;
    /**
     * Max percentage of bytes to scan from a file. The rest are omitted. The
     * number of bytes scanned is rounded down. Must be between 0 and 100,
     * inclusively. Both 0 and 100 means no limit. Defaults to 0. Only one
     * of bytes_limit_per_file and bytes_limit_per_file_percent can be specified.
     *
     * Generated from protobuf field <code>int32 bytes_limit_per_file_percent = 8;</code>
     */
    private $bytes_limit_per_file_percent = 0;
    /**
     * List of file type groups to include in the scan.
     * If empty, all files are scanned and available data format processors
     * are applied. In addition, the binary content of the selected files
     * is always scanned as well.
     * Images are scanned only as binary if the specified region
     * does not support image inspection and no file_types were specified.
     * Image inspection is restricted to 'global', 'us', 'asia', and 'europe'.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileType file_types = 5;</code>
     */
    private $file_types;
    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudStorageOptions.SampleMethod sample_method = 6;</code>
     */
    private $sample_method = 0;
    /**
     * Limits the number of files to scan to this percentage of the input FileSet.
     * Number of files scanned is rounded down. Must be between 0 and 100,
     * inclusively. Both 0 and 100 means no limit. Defaults to 0.
     *
     * Generated from protobuf field <code>int32 files_limit_percent = 7;</code>
     */
    private $files_limit_percent = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\CloudStorageOptions\FileSet $file_set
     *           The set of one or more files to scan.
     *     @type int|string $bytes_limit_per_file
     *           Max number of bytes to scan from a file. If a scanned file's size is bigger
     *           than this value then the rest of the bytes are omitted. Only one
     *           of bytes_limit_per_file and bytes_limit_per_file_percent can be specified.
     *     @type int $bytes_limit_per_file_percent
     *           Max percentage of bytes to scan from a file. The rest are omitted. The
     *           number of bytes scanned is rounded down. Must be between 0 and 100,
     *           inclusively. Both 0 and 100 means no limit. Defaults to 0. Only one
     *           of bytes_limit_per_file and bytes_limit_per_file_percent can be specified.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $file_types
     *           List of file type groups to include in the scan.
     *           If empty, all files are scanned and available data format processors
     *           are applied. In addition, the binary content of the selected files
     *           is always scanned as well.
     *           Images are scanned only as binary if the specified region
     *           does not support image inspection and no file_types were specified.
     *           Image inspection is restricted to 'global', 'us', 'asia', and 'europe'.
     *     @type int $sample_method
     *     @type int $files_limit_percent
     *           Limits the number of files to scan to this percentage of the input FileSet.
     *           Number of files scanned is rounded down. Must be between 0 and 100,
     *           inclusively. Both 0 and 100 means no limit. Defaults to 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of one or more files to scan.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudStorageOptions.FileSet file_set = 1;</code>
     * @return \Google\Cloud\Dlp\V2\CloudStorageOptions\FileSet
     */
    public function getFileSet()
    {
        return $this->file_set;
    }

    /**
     * The set of one or more files to scan.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudStorageOptions.FileSet file_set = 1;</code>
     * @param \Google\Cloud\Dlp\V2\CloudStorageOptions\FileSet $var
     * @return $this
     */
    public function setFileSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CloudStorageOptions_FileSet::class);
        $this->file_set = $var;

        return $this;
    }

    /**
     * Max number of bytes to scan from a file. If a scanned file's size is bigger
     * than this value then the rest of the bytes are omitted. Only one
     * of bytes_limit_per_file and bytes_limit_per_file_percent can be specified.
     *
     * Generated from protobuf field <code>int64 bytes_limit_per_file = 4;</code>
     * @return int|string
     */
    public function getBytesLimitPerFile()
    {
        return $this->bytes_limit_per_file;
    }

    /**
     * Max number of bytes to scan from a file. If a scanned file's size is bigger
     * than this value then the rest of the bytes are omitted. Only one
     * of bytes_limit_per_file and bytes_limit_per_file_percent can be specified.
     *
     * Generated from protobuf field <code>int64 bytes_limit_per_file = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesLimitPerFile($var)
    {
        GPBUtil::checkInt64($var);
        $this->bytes_limit_per_file = $var;

        return $this;
    }

    /**
     * Max percentage of bytes to scan from a file. The rest are omitted. The
     * number of bytes scanned is rounded down. Must be between 0 and 100,
     * inclusively. Both 0 and 100 means no limit. Defaults to 0. Only one
     * of bytes_limit_per_file and bytes_limit_per_file_percent can be specified.
     *
     * Generated from protobuf field <code>int32 bytes_limit_per_file_percent = 8;</code>
     * @return int
     */
    public function getBytesLimitPerFilePercent()
    {
        return $this->bytes_limit_per_file_percent;
    }

    /**
     * Max percentage of bytes to scan from a file. The rest are omitted. The
     * number of bytes scanned is rounded down. Must be between 0 and 100,
     * inclusively. Both 0 and 100 means no limit. Defaults to 0. Only one
     * of bytes_limit_per_file and bytes_limit_per_file_percent can be specified.
     *
     * Generated from protobuf field <code>int32 bytes_limit_per_file_percent = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBytesLimitPerFilePercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->bytes_limit_per_file_percent = $var;

        return $this;
    }

    /**
     * List of file type groups to include in the scan.
     * If empty, all files are scanned and available data format processors
     * are applied. In addition, the binary content of the selected files
     * is always scanned as well.
     * Images are scanned only as binary if the specified region
     * does not support image inspection and no file_types were specified.
     * Image inspection is restricted to 'global', 'us', 'asia', and 'europe'.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileType file_types = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileTypes()
    {
        return $this->file_types;
    }

    /**
     * List of file type groups to include in the scan.
     * If empty, all files are scanned and available data format processors
     * are applied. In addition, the binary content of the selected files
     * is always scanned as well.
     * Images are scanned only as binary if the specified region
     * does not support image inspection and no file_types were specified.
     * Image inspection is restricted to 'global', 'us', 'asia', and 'europe'.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileType file_types = 5;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dlp\V2\FileType::class);
        $this->file_types = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudStorageOptions.SampleMethod sample_method = 6;</code>
     * @return int
     */
    public function getSampleMethod()
    {
        return $this->sample_method;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudStorageOptions.SampleMethod sample_method = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\CloudStorageOptions_SampleMethod::class);
        $this->sample_method = $var;

        return $this;
    }

    /**
     * Limits the number of files to scan to this percentage of the input FileSet.
     * Number of files scanned is rounded down. Must be between 0 and 100,
     * inclusively. Both 0 and 100 means no limit. Defaults to 0.
     *
     * Generated from protobuf field <code>int32 files_limit_percent = 7;</code>
     * @return int
     */
    public function getFilesLimitPercent()
    {
        return $this->files_limit_percent;
    }

    /**
     * Limits the number of files to scan to this percentage of the input FileSet.
     * Number of files scanned is rounded down. Must be between 0 and 100,
     * inclusively. Both 0 and 100 means no limit. Defaults to 0.
     *
     * Generated from protobuf field <code>int32 files_limit_percent = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFilesLimitPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->files_limit_percent = $var;

        return $this;
    }

}
