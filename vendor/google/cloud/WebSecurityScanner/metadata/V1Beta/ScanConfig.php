<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_config.proto

namespace GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta;

class ScanConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanRun::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acb100a38676f6f676c652f636c6f75642f77656273656375726974797363616e6e65722f7631626574612f7363616e5f636f6e6669672e70726f746f1226676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574611a19676f6f676c652f6170692f7265736f757263652e70726f746f1a35676f6f676c652f636c6f75642f77656273656375726974797363616e6e65722f7631626574612f7363616e5f72756e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22a60d0a0a5363616e436f6e666967120c0a046e616d6518012001280912190a0c646973706c61795f6e616d651802200128094203e04102120f0a076d61785f717073180320012805121a0a0d7374617274696e675f75726c731804200328094203e0410212590a0e61757468656e7469636174696f6e18052001280b32412e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669672e41757468656e7469636174696f6e12500a0a757365725f6167656e7418062001280e323c2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669672e557365724167656e74121a0a12626c61636b6c6973745f7061747465726e73180720032809124d0a087363686564756c6518082001280b323b2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669672e5363686564756c65125b0a107461726765745f706c6174666f726d7318092003280e32412e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669672e546172676574506c6174666f726d127b0a216578706f72745f746f5f73656375726974795f636f6d6d616e645f63656e746572180a2001280e32502e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669672e4578706f7274546f5365637572697479436f6d6d616e6443656e74657212430a0a6c61746573745f72756e180b2001280b322f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e52756e12500a0a7269736b5f6c6576656c180c2001280e323c2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669672e5269736b4c6576656c1a94030a0e41757468656e7469636174696f6e12690a0e676f6f676c655f6163636f756e7418012001280b324f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669672e41757468656e7469636174696f6e2e476f6f676c654163636f756e74480012690a0e637573746f6d5f6163636f756e7418022001280b324f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669672e41757468656e7469636174696f6e2e437573746f6d4163636f756e7448001a400a0d476f6f676c654163636f756e7412150a08757365726e616d651801200128094203e0410212180a0870617373776f72641802200128094206e04102e041041a580a0d437573746f6d4163636f756e7412150a08757365726e616d651801200128094203e0410212180a0870617373776f72641802200128094206e04102e0410412160a096c6f67696e5f75726c1803200128094203e0410242100a0e61757468656e7469636174696f6e1a620a085363686564756c6512310a0d7363686564756c655f74696d6518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012230a16696e74657276616c5f6475726174696f6e5f646179731802200128054203e0410222600a09557365724167656e74121a0a16555345525f4147454e545f554e535045434946494544100012100a0c4348524f4d455f4c494e5558100112120a0e4348524f4d455f414e44524f4944100212110a0d5341464152495f4950484f4e451003224e0a0e546172676574506c6174666f726d121f0a1b5441524745545f504c4154464f524d5f554e5350454349464945441000120e0a0a4150505f454e47494e451001120b0a07434f4d505554451002223c0a095269736b4c6576656c121a0a165249534b5f4c4556454c5f554e5350454349464945441000120a0a064e4f524d414c100112070a034c4f571002226d0a1d4578706f7274546f5365637572697479436f6d6d616e6443656e74657212310a2d4558504f52545f544f5f53454355524954595f434f4d4d414e445f43454e5445525f554e5350454349464945441000120b0a07454e41424c45441001120c0a0844495341424c454410023a5fea415c0a2c77656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e436f6e666967122c70726f6a656374732f7b70726f6a6563747d2f7363616e436f6e666967732f7b7363616e5f636f6e6669677d42c2010a2a636f6d2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e763162657461420f5363616e436f6e66696750726f746f50015a58676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f77656273656375726974797363616e6e65722f7631626574613b77656273656375726974797363616e6e6572ca0226476f6f676c655c436c6f75645c57656253656375726974795363616e6e65725c563162657461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

