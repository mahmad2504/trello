<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a971ec02131dab23107586260f5189f
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\Tests\\' => 14,
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'MongoDB\\BulkWriteResult' => __DIR__ . '/../..' . '/src/BulkWriteResult.php',
        'MongoDB\\ChangeStream' => __DIR__ . '/../..' . '/src/ChangeStream.php',
        'MongoDB\\Client' => __DIR__ . '/../..' . '/src/Client.php',
        'MongoDB\\Collection' => __DIR__ . '/../..' . '/src/Collection.php',
        'MongoDB\\Database' => __DIR__ . '/../..' . '/src/Database.php',
        'MongoDB\\DeleteResult' => __DIR__ . '/../..' . '/src/DeleteResult.php',
        'MongoDB\\Exception\\BadMethodCallException' => __DIR__ . '/../..' . '/src/Exception/BadMethodCallException.php',
        'MongoDB\\Exception\\Exception' => __DIR__ . '/../..' . '/src/Exception/Exception.php',
        'MongoDB\\Exception\\InvalidArgumentException' => __DIR__ . '/../..' . '/src/Exception/InvalidArgumentException.php',
        'MongoDB\\Exception\\ResumeTokenException' => __DIR__ . '/../..' . '/src/Exception/ResumeTokenException.php',
        'MongoDB\\Exception\\RuntimeException' => __DIR__ . '/../..' . '/src/Exception/RuntimeException.php',
        'MongoDB\\Exception\\UnexpectedValueException' => __DIR__ . '/../..' . '/src/Exception/UnexpectedValueException.php',
        'MongoDB\\Exception\\UnsupportedException' => __DIR__ . '/../..' . '/src/Exception/UnsupportedException.php',
        'MongoDB\\GridFS\\Bucket' => __DIR__ . '/../..' . '/src/GridFS/Bucket.php',
        'MongoDB\\GridFS\\CollectionWrapper' => __DIR__ . '/../..' . '/src/GridFS/CollectionWrapper.php',
        'MongoDB\\GridFS\\Exception\\CorruptFileException' => __DIR__ . '/../..' . '/src/GridFS/Exception/CorruptFileException.php',
        'MongoDB\\GridFS\\Exception\\FileNotFoundException' => __DIR__ . '/../..' . '/src/GridFS/Exception/FileNotFoundException.php',
        'MongoDB\\GridFS\\ReadableStream' => __DIR__ . '/../..' . '/src/GridFS/ReadableStream.php',
        'MongoDB\\GridFS\\StreamWrapper' => __DIR__ . '/../..' . '/src/GridFS/StreamWrapper.php',
        'MongoDB\\GridFS\\WritableStream' => __DIR__ . '/../..' . '/src/GridFS/WritableStream.php',
        'MongoDB\\InsertManyResult' => __DIR__ . '/../..' . '/src/InsertManyResult.php',
        'MongoDB\\InsertOneResult' => __DIR__ . '/../..' . '/src/InsertOneResult.php',
        'MongoDB\\MapReduceResult' => __DIR__ . '/../..' . '/src/MapReduceResult.php',
        'MongoDB\\Model\\BSONArray' => __DIR__ . '/../..' . '/src/Model/BSONArray.php',
        'MongoDB\\Model\\BSONDocument' => __DIR__ . '/../..' . '/src/Model/BSONDocument.php',
        'MongoDB\\Model\\BSONIterator' => __DIR__ . '/../..' . '/src/Model/BSONIterator.php',
        'MongoDB\\Model\\CachingIterator' => __DIR__ . '/../..' . '/src/Model/CachingIterator.php',
        'MongoDB\\Model\\CollectionInfo' => __DIR__ . '/../..' . '/src/Model/CollectionInfo.php',
        'MongoDB\\Model\\CollectionInfoCommandIterator' => __DIR__ . '/../..' . '/src/Model/CollectionInfoCommandIterator.php',
        'MongoDB\\Model\\CollectionInfoIterator' => __DIR__ . '/../..' . '/src/Model/CollectionInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfo' => __DIR__ . '/../..' . '/src/Model/DatabaseInfo.php',
        'MongoDB\\Model\\DatabaseInfoIterator' => __DIR__ . '/../..' . '/src/Model/DatabaseInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfoLegacyIterator' => __DIR__ . '/../..' . '/src/Model/DatabaseInfoLegacyIterator.php',
        'MongoDB\\Model\\IndexInfo' => __DIR__ . '/../..' . '/src/Model/IndexInfo.php',
        'MongoDB\\Model\\IndexInfoIterator' => __DIR__ . '/../..' . '/src/Model/IndexInfoIterator.php',
        'MongoDB\\Model\\IndexInfoIteratorIterator' => __DIR__ . '/../..' . '/src/Model/IndexInfoIteratorIterator.php',
        'MongoDB\\Model\\IndexInput' => __DIR__ . '/../..' . '/src/Model/IndexInput.php',
        'MongoDB\\Model\\TypeMapArrayIterator' => __DIR__ . '/../..' . '/src/Model/TypeMapArrayIterator.php',
        'MongoDB\\Operation\\Aggregate' => __DIR__ . '/../..' . '/src/Operation/Aggregate.php',
        'MongoDB\\Operation\\BulkWrite' => __DIR__ . '/../..' . '/src/Operation/BulkWrite.php',
        'MongoDB\\Operation\\Count' => __DIR__ . '/../..' . '/src/Operation/Count.php',
        'MongoDB\\Operation\\CountDocuments' => __DIR__ . '/../..' . '/src/Operation/CountDocuments.php',
        'MongoDB\\Operation\\CreateCollection' => __DIR__ . '/../..' . '/src/Operation/CreateCollection.php',
        'MongoDB\\Operation\\CreateIndexes' => __DIR__ . '/../..' . '/src/Operation/CreateIndexes.php',
        'MongoDB\\Operation\\DatabaseCommand' => __DIR__ . '/../..' . '/src/Operation/DatabaseCommand.php',
        'MongoDB\\Operation\\Delete' => __DIR__ . '/../..' . '/src/Operation/Delete.php',
        'MongoDB\\Operation\\DeleteMany' => __DIR__ . '/../..' . '/src/Operation/DeleteMany.php',
        'MongoDB\\Operation\\DeleteOne' => __DIR__ . '/../..' . '/src/Operation/DeleteOne.php',
        'MongoDB\\Operation\\Distinct' => __DIR__ . '/../..' . '/src/Operation/Distinct.php',
        'MongoDB\\Operation\\DropCollection' => __DIR__ . '/../..' . '/src/Operation/DropCollection.php',
        'MongoDB\\Operation\\DropDatabase' => __DIR__ . '/../..' . '/src/Operation/DropDatabase.php',
        'MongoDB\\Operation\\DropIndexes' => __DIR__ . '/../..' . '/src/Operation/DropIndexes.php',
        'MongoDB\\Operation\\EstimatedDocumentCount' => __DIR__ . '/../..' . '/src/Operation/EstimatedDocumentCount.php',
        'MongoDB\\Operation\\Executable' => __DIR__ . '/../..' . '/src/Operation/Executable.php',
        'MongoDB\\Operation\\Explain' => __DIR__ . '/../..' . '/src/Operation/Explain.php',
        'MongoDB\\Operation\\Explainable' => __DIR__ . '/../..' . '/src/Operation/Explainable.php',
        'MongoDB\\Operation\\Find' => __DIR__ . '/../..' . '/src/Operation/Find.php',
        'MongoDB\\Operation\\FindAndModify' => __DIR__ . '/../..' . '/src/Operation/FindAndModify.php',
        'MongoDB\\Operation\\FindOne' => __DIR__ . '/../..' . '/src/Operation/FindOne.php',
        'MongoDB\\Operation\\FindOneAndDelete' => __DIR__ . '/../..' . '/src/Operation/FindOneAndDelete.php',
        'MongoDB\\Operation\\FindOneAndReplace' => __DIR__ . '/../..' . '/src/Operation/FindOneAndReplace.php',
        'MongoDB\\Operation\\FindOneAndUpdate' => __DIR__ . '/../..' . '/src/Operation/FindOneAndUpdate.php',
        'MongoDB\\Operation\\InsertMany' => __DIR__ . '/../..' . '/src/Operation/InsertMany.php',
        'MongoDB\\Operation\\InsertOne' => __DIR__ . '/../..' . '/src/Operation/InsertOne.php',
        'MongoDB\\Operation\\ListCollections' => __DIR__ . '/../..' . '/src/Operation/ListCollections.php',
        'MongoDB\\Operation\\ListDatabases' => __DIR__ . '/../..' . '/src/Operation/ListDatabases.php',
        'MongoDB\\Operation\\ListIndexes' => __DIR__ . '/../..' . '/src/Operation/ListIndexes.php',
        'MongoDB\\Operation\\MapReduce' => __DIR__ . '/../..' . '/src/Operation/MapReduce.php',
        'MongoDB\\Operation\\ModifyCollection' => __DIR__ . '/../..' . '/src/Operation/ModifyCollection.php',
        'MongoDB\\Operation\\ReplaceOne' => __DIR__ . '/../..' . '/src/Operation/ReplaceOne.php',
        'MongoDB\\Operation\\Update' => __DIR__ . '/../..' . '/src/Operation/Update.php',
        'MongoDB\\Operation\\UpdateMany' => __DIR__ . '/../..' . '/src/Operation/UpdateMany.php',
        'MongoDB\\Operation\\UpdateOne' => __DIR__ . '/../..' . '/src/Operation/UpdateOne.php',
        'MongoDB\\Operation\\Watch' => __DIR__ . '/../..' . '/src/Operation/Watch.php',
        'MongoDB\\Tests\\ClientFunctionalTest' => __DIR__ . '/../..' . '/tests/ClientFunctionalTest.php',
        'MongoDB\\Tests\\ClientTest' => __DIR__ . '/../..' . '/tests/ClientTest.php',
        'MongoDB\\Tests\\Collection\\CollectionFunctionalTest' => __DIR__ . '/../..' . '/tests/Collection/CollectionFunctionalTest.php',
        'MongoDB\\Tests\\Collection\\CrudSpecFunctionalTest' => __DIR__ . '/../..' . '/tests/Collection/CrudSpecFunctionalTest.php',
        'MongoDB\\Tests\\Collection\\FunctionalTestCase' => __DIR__ . '/../..' . '/tests/Collection/FunctionalTestCase.php',
        'MongoDB\\Tests\\CommandObserver' => __DIR__ . '/../..' . '/tests/CommandObserver.php',
        'MongoDB\\Tests\\Database\\CollectionManagementFunctionalTest' => __DIR__ . '/../..' . '/tests/Database/CollectionManagementFunctionalTest.php',
        'MongoDB\\Tests\\Database\\DatabaseFunctionalTest' => __DIR__ . '/../..' . '/tests/Database/DatabaseFunctionalTest.php',
        'MongoDB\\Tests\\Database\\FunctionalTestCase' => __DIR__ . '/../..' . '/tests/Database/FunctionalTestCase.php',
        'MongoDB\\Tests\\DocumentationExamplesTest' => __DIR__ . '/../..' . '/tests/DocumentationExamplesTest.php',
        'MongoDB\\Tests\\FunctionalTestCase' => __DIR__ . '/../..' . '/tests/FunctionalTestCase.php',
        'MongoDB\\Tests\\FunctionsTest' => __DIR__ . '/../..' . '/tests/FunctionsTest.php',
        'MongoDB\\Tests\\GridFS\\BucketFunctionalTest' => __DIR__ . '/../..' . '/tests/GridFS/BucketFunctionalTest.php',
        'MongoDB\\Tests\\GridFS\\FunctionalTestCase' => __DIR__ . '/../..' . '/tests/GridFS/FunctionalTestCase.php',
        'MongoDB\\Tests\\GridFS\\ReadableStreamFunctionalTest' => __DIR__ . '/../..' . '/tests/GridFS/ReadableStreamFunctionalTest.php',
        'MongoDB\\Tests\\GridFS\\SpecFunctionalTest' => __DIR__ . '/../..' . '/tests/GridFS/SpecFunctionalTest.php',
        'MongoDB\\Tests\\GridFS\\StreamWrapperFunctionalTest' => __DIR__ . '/../..' . '/tests/GridFS/StreamWrapperFunctionalTest.php',
        'MongoDB\\Tests\\GridFS\\WritableStreamFunctionalTest' => __DIR__ . '/../..' . '/tests/GridFS/WritableStreamFunctionalTest.php',
        'MongoDB\\Tests\\Model\\BSONArrayTest' => __DIR__ . '/../..' . '/tests/Model/BSONArrayTest.php',
        'MongoDB\\Tests\\Model\\BSONDocumentTest' => __DIR__ . '/../..' . '/tests/Model/BSONDocumentTest.php',
        'MongoDB\\Tests\\Model\\BSONIteratorTest' => __DIR__ . '/../..' . '/tests/Model/BSONIteratorTest.php',
        'MongoDB\\Tests\\Model\\CachingIteratorTest' => __DIR__ . '/../..' . '/tests/Model/CachingIteratorTest.php',
        'MongoDB\\Tests\\Model\\CollectionInfoTest' => __DIR__ . '/../..' . '/tests/Model/CollectionInfoTest.php',
        'MongoDB\\Tests\\Model\\DatabaseInfoTest' => __DIR__ . '/../..' . '/tests/Model/DatabaseInfoTest.php',
        'MongoDB\\Tests\\Model\\IndexInfoFunctionalTest' => __DIR__ . '/../..' . '/tests/Model/IndexInfoFunctionalTest.php',
        'MongoDB\\Tests\\Model\\IndexInfoTest' => __DIR__ . '/../..' . '/tests/Model/IndexInfoTest.php',
        'MongoDB\\Tests\\Model\\IndexInputTest' => __DIR__ . '/../..' . '/tests/Model/IndexInputTest.php',
        'MongoDB\\Tests\\Model\\TypeMapArrayIteratorTest' => __DIR__ . '/../..' . '/tests/Model/TypeMapArrayIteratorTest.php',
        'MongoDB\\Tests\\Model\\UncloneableObject' => __DIR__ . '/../..' . '/tests/Model/UncloneableObject.php',
        'MongoDB\\Tests\\Operation\\AggregateFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/AggregateFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\AggregateTest' => __DIR__ . '/../..' . '/tests/Operation/AggregateTest.php',
        'MongoDB\\Tests\\Operation\\BulkWriteFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/BulkWriteFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\BulkWriteTest' => __DIR__ . '/../..' . '/tests/Operation/BulkWriteTest.php',
        'MongoDB\\Tests\\Operation\\CountDocumentsFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/CountDocumentsFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\CountDocumentsTest' => __DIR__ . '/../..' . '/tests/Operation/CountDocumentsTest.php',
        'MongoDB\\Tests\\Operation\\CountFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/CountFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\CountTest' => __DIR__ . '/../..' . '/tests/Operation/CountTest.php',
        'MongoDB\\Tests\\Operation\\CreateCollectionFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/CreateCollectionFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\CreateCollectionTest' => __DIR__ . '/../..' . '/tests/Operation/CreateCollectionTest.php',
        'MongoDB\\Tests\\Operation\\CreateIndexesFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/CreateIndexesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\CreateIndexesTest' => __DIR__ . '/../..' . '/tests/Operation/CreateIndexesTest.php',
        'MongoDB\\Tests\\Operation\\DatabaseCommandFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/DatabaseCommandFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DatabaseCommandTest' => __DIR__ . '/../..' . '/tests/Operation/DatabaseCommandTest.php',
        'MongoDB\\Tests\\Operation\\DeleteFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/DeleteFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DeleteTest' => __DIR__ . '/../..' . '/tests/Operation/DeleteTest.php',
        'MongoDB\\Tests\\Operation\\DistinctFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/DistinctFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DistinctTest' => __DIR__ . '/../..' . '/tests/Operation/DistinctTest.php',
        'MongoDB\\Tests\\Operation\\DropCollectionFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/DropCollectionFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DropCollectionTest' => __DIR__ . '/../..' . '/tests/Operation/DropCollectionTest.php',
        'MongoDB\\Tests\\Operation\\DropDatabaseFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/DropDatabaseFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DropDatabaseTest' => __DIR__ . '/../..' . '/tests/Operation/DropDatabaseTest.php',
        'MongoDB\\Tests\\Operation\\DropIndexesFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/DropIndexesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DropIndexesTest' => __DIR__ . '/../..' . '/tests/Operation/DropIndexesTest.php',
        'MongoDB\\Tests\\Operation\\EstimatedDocumentCountTest' => __DIR__ . '/../..' . '/tests/Operation/EstimatedDocumentCountTest.php',
        'MongoDB\\Tests\\Operation\\ExplainFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/ExplainFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ExplainTest' => __DIR__ . '/../..' . '/tests/Operation/ExplainTest.php',
        'MongoDB\\Tests\\Operation\\FindAndModifyFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/FindAndModifyFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\FindAndModifyTest' => __DIR__ . '/../..' . '/tests/Operation/FindAndModifyTest.php',
        'MongoDB\\Tests\\Operation\\FindFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/FindFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\FindOneAndDeleteTest' => __DIR__ . '/../..' . '/tests/Operation/FindOneAndDeleteTest.php',
        'MongoDB\\Tests\\Operation\\FindOneAndReplaceTest' => __DIR__ . '/../..' . '/tests/Operation/FindOneAndReplaceTest.php',
        'MongoDB\\Tests\\Operation\\FindOneAndUpdateTest' => __DIR__ . '/../..' . '/tests/Operation/FindOneAndUpdateTest.php',
        'MongoDB\\Tests\\Operation\\FindOneFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/FindOneFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\FindTest' => __DIR__ . '/../..' . '/tests/Operation/FindTest.php',
        'MongoDB\\Tests\\Operation\\FunctionalTestCase' => __DIR__ . '/../..' . '/tests/Operation/FunctionalTestCase.php',
        'MongoDB\\Tests\\Operation\\InsertManyFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/InsertManyFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\InsertManyTest' => __DIR__ . '/../..' . '/tests/Operation/InsertManyTest.php',
        'MongoDB\\Tests\\Operation\\InsertOneFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/InsertOneFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\InsertOneTest' => __DIR__ . '/../..' . '/tests/Operation/InsertOneTest.php',
        'MongoDB\\Tests\\Operation\\ListCollectionsFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/ListCollectionsFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ListCollectionsTest' => __DIR__ . '/../..' . '/tests/Operation/ListCollectionsTest.php',
        'MongoDB\\Tests\\Operation\\ListDatabasesFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/ListDatabasesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ListDatabasesTest' => __DIR__ . '/../..' . '/tests/Operation/ListDatabasesTest.php',
        'MongoDB\\Tests\\Operation\\ListIndexesFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/ListIndexesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ListIndexesTest' => __DIR__ . '/../..' . '/tests/Operation/ListIndexesTest.php',
        'MongoDB\\Tests\\Operation\\MapReduceFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/MapReduceFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\MapReduceTest' => __DIR__ . '/../..' . '/tests/Operation/MapReduceTest.php',
        'MongoDB\\Tests\\Operation\\ModifyCollectionFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/ModifyCollectionFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ModifyCollectionTest' => __DIR__ . '/../..' . '/tests/Operation/ModifyCollectionTest.php',
        'MongoDB\\Tests\\Operation\\ReplaceOneTest' => __DIR__ . '/../..' . '/tests/Operation/ReplaceOneTest.php',
        'MongoDB\\Tests\\Operation\\TestCase' => __DIR__ . '/../..' . '/tests/Operation/TestCase.php',
        'MongoDB\\Tests\\Operation\\UpdateFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/UpdateFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\UpdateManyTest' => __DIR__ . '/../..' . '/tests/Operation/UpdateManyTest.php',
        'MongoDB\\Tests\\Operation\\UpdateOneTest' => __DIR__ . '/../..' . '/tests/Operation/UpdateOneTest.php',
        'MongoDB\\Tests\\Operation\\UpdateTest' => __DIR__ . '/../..' . '/tests/Operation/UpdateTest.php',
        'MongoDB\\Tests\\Operation\\WatchFunctionalTest' => __DIR__ . '/../..' . '/tests/Operation/WatchFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\WatchTest' => __DIR__ . '/../..' . '/tests/Operation/WatchTest.php',
        'MongoDB\\Tests\\PedantryTest' => __DIR__ . '/../..' . '/tests/PedantryTest.php',
        'MongoDB\\Tests\\TestCase' => __DIR__ . '/../..' . '/tests/TestCase.php',
        'MongoDB\\UpdateResult' => __DIR__ . '/../..' . '/src/UpdateResult.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a971ec02131dab23107586260f5189f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a971ec02131dab23107586260f5189f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a971ec02131dab23107586260f5189f::$classMap;

        }, null, ClassLoader::class);
    }
}
