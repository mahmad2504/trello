<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'MongoDB\\BulkWriteResult' => $baseDir . '/src/BulkWriteResult.php',
    'MongoDB\\ChangeStream' => $baseDir . '/src/ChangeStream.php',
    'MongoDB\\Client' => $baseDir . '/src/Client.php',
    'MongoDB\\Collection' => $baseDir . '/src/Collection.php',
    'MongoDB\\Database' => $baseDir . '/src/Database.php',
    'MongoDB\\DeleteResult' => $baseDir . '/src/DeleteResult.php',
    'MongoDB\\Exception\\BadMethodCallException' => $baseDir . '/src/Exception/BadMethodCallException.php',
    'MongoDB\\Exception\\Exception' => $baseDir . '/src/Exception/Exception.php',
    'MongoDB\\Exception\\InvalidArgumentException' => $baseDir . '/src/Exception/InvalidArgumentException.php',
    'MongoDB\\Exception\\ResumeTokenException' => $baseDir . '/src/Exception/ResumeTokenException.php',
    'MongoDB\\Exception\\RuntimeException' => $baseDir . '/src/Exception/RuntimeException.php',
    'MongoDB\\Exception\\UnexpectedValueException' => $baseDir . '/src/Exception/UnexpectedValueException.php',
    'MongoDB\\Exception\\UnsupportedException' => $baseDir . '/src/Exception/UnsupportedException.php',
    'MongoDB\\GridFS\\Bucket' => $baseDir . '/src/GridFS/Bucket.php',
    'MongoDB\\GridFS\\CollectionWrapper' => $baseDir . '/src/GridFS/CollectionWrapper.php',
    'MongoDB\\GridFS\\Exception\\CorruptFileException' => $baseDir . '/src/GridFS/Exception/CorruptFileException.php',
    'MongoDB\\GridFS\\Exception\\FileNotFoundException' => $baseDir . '/src/GridFS/Exception/FileNotFoundException.php',
    'MongoDB\\GridFS\\ReadableStream' => $baseDir . '/src/GridFS/ReadableStream.php',
    'MongoDB\\GridFS\\StreamWrapper' => $baseDir . '/src/GridFS/StreamWrapper.php',
    'MongoDB\\GridFS\\WritableStream' => $baseDir . '/src/GridFS/WritableStream.php',
    'MongoDB\\InsertManyResult' => $baseDir . '/src/InsertManyResult.php',
    'MongoDB\\InsertOneResult' => $baseDir . '/src/InsertOneResult.php',
    'MongoDB\\MapReduceResult' => $baseDir . '/src/MapReduceResult.php',
    'MongoDB\\Model\\BSONArray' => $baseDir . '/src/Model/BSONArray.php',
    'MongoDB\\Model\\BSONDocument' => $baseDir . '/src/Model/BSONDocument.php',
    'MongoDB\\Model\\BSONIterator' => $baseDir . '/src/Model/BSONIterator.php',
    'MongoDB\\Model\\CachingIterator' => $baseDir . '/src/Model/CachingIterator.php',
    'MongoDB\\Model\\CollectionInfo' => $baseDir . '/src/Model/CollectionInfo.php',
    'MongoDB\\Model\\CollectionInfoCommandIterator' => $baseDir . '/src/Model/CollectionInfoCommandIterator.php',
    'MongoDB\\Model\\CollectionInfoIterator' => $baseDir . '/src/Model/CollectionInfoIterator.php',
    'MongoDB\\Model\\DatabaseInfo' => $baseDir . '/src/Model/DatabaseInfo.php',
    'MongoDB\\Model\\DatabaseInfoIterator' => $baseDir . '/src/Model/DatabaseInfoIterator.php',
    'MongoDB\\Model\\DatabaseInfoLegacyIterator' => $baseDir . '/src/Model/DatabaseInfoLegacyIterator.php',
    'MongoDB\\Model\\IndexInfo' => $baseDir . '/src/Model/IndexInfo.php',
    'MongoDB\\Model\\IndexInfoIterator' => $baseDir . '/src/Model/IndexInfoIterator.php',
    'MongoDB\\Model\\IndexInfoIteratorIterator' => $baseDir . '/src/Model/IndexInfoIteratorIterator.php',
    'MongoDB\\Model\\IndexInput' => $baseDir . '/src/Model/IndexInput.php',
    'MongoDB\\Model\\TypeMapArrayIterator' => $baseDir . '/src/Model/TypeMapArrayIterator.php',
    'MongoDB\\Operation\\Aggregate' => $baseDir . '/src/Operation/Aggregate.php',
    'MongoDB\\Operation\\BulkWrite' => $baseDir . '/src/Operation/BulkWrite.php',
    'MongoDB\\Operation\\Count' => $baseDir . '/src/Operation/Count.php',
    'MongoDB\\Operation\\CountDocuments' => $baseDir . '/src/Operation/CountDocuments.php',
    'MongoDB\\Operation\\CreateCollection' => $baseDir . '/src/Operation/CreateCollection.php',
    'MongoDB\\Operation\\CreateIndexes' => $baseDir . '/src/Operation/CreateIndexes.php',
    'MongoDB\\Operation\\DatabaseCommand' => $baseDir . '/src/Operation/DatabaseCommand.php',
    'MongoDB\\Operation\\Delete' => $baseDir . '/src/Operation/Delete.php',
    'MongoDB\\Operation\\DeleteMany' => $baseDir . '/src/Operation/DeleteMany.php',
    'MongoDB\\Operation\\DeleteOne' => $baseDir . '/src/Operation/DeleteOne.php',
    'MongoDB\\Operation\\Distinct' => $baseDir . '/src/Operation/Distinct.php',
    'MongoDB\\Operation\\DropCollection' => $baseDir . '/src/Operation/DropCollection.php',
    'MongoDB\\Operation\\DropDatabase' => $baseDir . '/src/Operation/DropDatabase.php',
    'MongoDB\\Operation\\DropIndexes' => $baseDir . '/src/Operation/DropIndexes.php',
    'MongoDB\\Operation\\EstimatedDocumentCount' => $baseDir . '/src/Operation/EstimatedDocumentCount.php',
    'MongoDB\\Operation\\Executable' => $baseDir . '/src/Operation/Executable.php',
    'MongoDB\\Operation\\Explain' => $baseDir . '/src/Operation/Explain.php',
    'MongoDB\\Operation\\Explainable' => $baseDir . '/src/Operation/Explainable.php',
    'MongoDB\\Operation\\Find' => $baseDir . '/src/Operation/Find.php',
    'MongoDB\\Operation\\FindAndModify' => $baseDir . '/src/Operation/FindAndModify.php',
    'MongoDB\\Operation\\FindOne' => $baseDir . '/src/Operation/FindOne.php',
    'MongoDB\\Operation\\FindOneAndDelete' => $baseDir . '/src/Operation/FindOneAndDelete.php',
    'MongoDB\\Operation\\FindOneAndReplace' => $baseDir . '/src/Operation/FindOneAndReplace.php',
    'MongoDB\\Operation\\FindOneAndUpdate' => $baseDir . '/src/Operation/FindOneAndUpdate.php',
    'MongoDB\\Operation\\InsertMany' => $baseDir . '/src/Operation/InsertMany.php',
    'MongoDB\\Operation\\InsertOne' => $baseDir . '/src/Operation/InsertOne.php',
    'MongoDB\\Operation\\ListCollections' => $baseDir . '/src/Operation/ListCollections.php',
    'MongoDB\\Operation\\ListDatabases' => $baseDir . '/src/Operation/ListDatabases.php',
    'MongoDB\\Operation\\ListIndexes' => $baseDir . '/src/Operation/ListIndexes.php',
    'MongoDB\\Operation\\MapReduce' => $baseDir . '/src/Operation/MapReduce.php',
    'MongoDB\\Operation\\ModifyCollection' => $baseDir . '/src/Operation/ModifyCollection.php',
    'MongoDB\\Operation\\ReplaceOne' => $baseDir . '/src/Operation/ReplaceOne.php',
    'MongoDB\\Operation\\Update' => $baseDir . '/src/Operation/Update.php',
    'MongoDB\\Operation\\UpdateMany' => $baseDir . '/src/Operation/UpdateMany.php',
    'MongoDB\\Operation\\UpdateOne' => $baseDir . '/src/Operation/UpdateOne.php',
    'MongoDB\\Operation\\Watch' => $baseDir . '/src/Operation/Watch.php',
    'MongoDB\\Tests\\ClientFunctionalTest' => $baseDir . '/tests/ClientFunctionalTest.php',
    'MongoDB\\Tests\\ClientTest' => $baseDir . '/tests/ClientTest.php',
    'MongoDB\\Tests\\Collection\\CollectionFunctionalTest' => $baseDir . '/tests/Collection/CollectionFunctionalTest.php',
    'MongoDB\\Tests\\Collection\\CrudSpecFunctionalTest' => $baseDir . '/tests/Collection/CrudSpecFunctionalTest.php',
    'MongoDB\\Tests\\Collection\\FunctionalTestCase' => $baseDir . '/tests/Collection/FunctionalTestCase.php',
    'MongoDB\\Tests\\CommandObserver' => $baseDir . '/tests/CommandObserver.php',
    'MongoDB\\Tests\\Database\\CollectionManagementFunctionalTest' => $baseDir . '/tests/Database/CollectionManagementFunctionalTest.php',
    'MongoDB\\Tests\\Database\\DatabaseFunctionalTest' => $baseDir . '/tests/Database/DatabaseFunctionalTest.php',
    'MongoDB\\Tests\\Database\\FunctionalTestCase' => $baseDir . '/tests/Database/FunctionalTestCase.php',
    'MongoDB\\Tests\\DocumentationExamplesTest' => $baseDir . '/tests/DocumentationExamplesTest.php',
    'MongoDB\\Tests\\FunctionalTestCase' => $baseDir . '/tests/FunctionalTestCase.php',
    'MongoDB\\Tests\\FunctionsTest' => $baseDir . '/tests/FunctionsTest.php',
    'MongoDB\\Tests\\GridFS\\BucketFunctionalTest' => $baseDir . '/tests/GridFS/BucketFunctionalTest.php',
    'MongoDB\\Tests\\GridFS\\FunctionalTestCase' => $baseDir . '/tests/GridFS/FunctionalTestCase.php',
    'MongoDB\\Tests\\GridFS\\ReadableStreamFunctionalTest' => $baseDir . '/tests/GridFS/ReadableStreamFunctionalTest.php',
    'MongoDB\\Tests\\GridFS\\SpecFunctionalTest' => $baseDir . '/tests/GridFS/SpecFunctionalTest.php',
    'MongoDB\\Tests\\GridFS\\StreamWrapperFunctionalTest' => $baseDir . '/tests/GridFS/StreamWrapperFunctionalTest.php',
    'MongoDB\\Tests\\GridFS\\WritableStreamFunctionalTest' => $baseDir . '/tests/GridFS/WritableStreamFunctionalTest.php',
    'MongoDB\\Tests\\Model\\BSONArrayTest' => $baseDir . '/tests/Model/BSONArrayTest.php',
    'MongoDB\\Tests\\Model\\BSONDocumentTest' => $baseDir . '/tests/Model/BSONDocumentTest.php',
    'MongoDB\\Tests\\Model\\BSONIteratorTest' => $baseDir . '/tests/Model/BSONIteratorTest.php',
    'MongoDB\\Tests\\Model\\CachingIteratorTest' => $baseDir . '/tests/Model/CachingIteratorTest.php',
    'MongoDB\\Tests\\Model\\CollectionInfoTest' => $baseDir . '/tests/Model/CollectionInfoTest.php',
    'MongoDB\\Tests\\Model\\DatabaseInfoTest' => $baseDir . '/tests/Model/DatabaseInfoTest.php',
    'MongoDB\\Tests\\Model\\IndexInfoFunctionalTest' => $baseDir . '/tests/Model/IndexInfoFunctionalTest.php',
    'MongoDB\\Tests\\Model\\IndexInfoTest' => $baseDir . '/tests/Model/IndexInfoTest.php',
    'MongoDB\\Tests\\Model\\IndexInputTest' => $baseDir . '/tests/Model/IndexInputTest.php',
    'MongoDB\\Tests\\Model\\TypeMapArrayIteratorTest' => $baseDir . '/tests/Model/TypeMapArrayIteratorTest.php',
    'MongoDB\\Tests\\Model\\UncloneableObject' => $baseDir . '/tests/Model/UncloneableObject.php',
    'MongoDB\\Tests\\Operation\\AggregateFunctionalTest' => $baseDir . '/tests/Operation/AggregateFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\AggregateTest' => $baseDir . '/tests/Operation/AggregateTest.php',
    'MongoDB\\Tests\\Operation\\BulkWriteFunctionalTest' => $baseDir . '/tests/Operation/BulkWriteFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\BulkWriteTest' => $baseDir . '/tests/Operation/BulkWriteTest.php',
    'MongoDB\\Tests\\Operation\\CountDocumentsFunctionalTest' => $baseDir . '/tests/Operation/CountDocumentsFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\CountDocumentsTest' => $baseDir . '/tests/Operation/CountDocumentsTest.php',
    'MongoDB\\Tests\\Operation\\CountFunctionalTest' => $baseDir . '/tests/Operation/CountFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\CountTest' => $baseDir . '/tests/Operation/CountTest.php',
    'MongoDB\\Tests\\Operation\\CreateCollectionFunctionalTest' => $baseDir . '/tests/Operation/CreateCollectionFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\CreateCollectionTest' => $baseDir . '/tests/Operation/CreateCollectionTest.php',
    'MongoDB\\Tests\\Operation\\CreateIndexesFunctionalTest' => $baseDir . '/tests/Operation/CreateIndexesFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\CreateIndexesTest' => $baseDir . '/tests/Operation/CreateIndexesTest.php',
    'MongoDB\\Tests\\Operation\\DatabaseCommandFunctionalTest' => $baseDir . '/tests/Operation/DatabaseCommandFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\DatabaseCommandTest' => $baseDir . '/tests/Operation/DatabaseCommandTest.php',
    'MongoDB\\Tests\\Operation\\DeleteFunctionalTest' => $baseDir . '/tests/Operation/DeleteFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\DeleteTest' => $baseDir . '/tests/Operation/DeleteTest.php',
    'MongoDB\\Tests\\Operation\\DistinctFunctionalTest' => $baseDir . '/tests/Operation/DistinctFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\DistinctTest' => $baseDir . '/tests/Operation/DistinctTest.php',
    'MongoDB\\Tests\\Operation\\DropCollectionFunctionalTest' => $baseDir . '/tests/Operation/DropCollectionFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\DropCollectionTest' => $baseDir . '/tests/Operation/DropCollectionTest.php',
    'MongoDB\\Tests\\Operation\\DropDatabaseFunctionalTest' => $baseDir . '/tests/Operation/DropDatabaseFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\DropDatabaseTest' => $baseDir . '/tests/Operation/DropDatabaseTest.php',
    'MongoDB\\Tests\\Operation\\DropIndexesFunctionalTest' => $baseDir . '/tests/Operation/DropIndexesFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\DropIndexesTest' => $baseDir . '/tests/Operation/DropIndexesTest.php',
    'MongoDB\\Tests\\Operation\\EstimatedDocumentCountTest' => $baseDir . '/tests/Operation/EstimatedDocumentCountTest.php',
    'MongoDB\\Tests\\Operation\\ExplainFunctionalTest' => $baseDir . '/tests/Operation/ExplainFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\ExplainTest' => $baseDir . '/tests/Operation/ExplainTest.php',
    'MongoDB\\Tests\\Operation\\FindAndModifyFunctionalTest' => $baseDir . '/tests/Operation/FindAndModifyFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\FindAndModifyTest' => $baseDir . '/tests/Operation/FindAndModifyTest.php',
    'MongoDB\\Tests\\Operation\\FindFunctionalTest' => $baseDir . '/tests/Operation/FindFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\FindOneAndDeleteTest' => $baseDir . '/tests/Operation/FindOneAndDeleteTest.php',
    'MongoDB\\Tests\\Operation\\FindOneAndReplaceTest' => $baseDir . '/tests/Operation/FindOneAndReplaceTest.php',
    'MongoDB\\Tests\\Operation\\FindOneAndUpdateTest' => $baseDir . '/tests/Operation/FindOneAndUpdateTest.php',
    'MongoDB\\Tests\\Operation\\FindOneFunctionalTest' => $baseDir . '/tests/Operation/FindOneFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\FindTest' => $baseDir . '/tests/Operation/FindTest.php',
    'MongoDB\\Tests\\Operation\\FunctionalTestCase' => $baseDir . '/tests/Operation/FunctionalTestCase.php',
    'MongoDB\\Tests\\Operation\\InsertManyFunctionalTest' => $baseDir . '/tests/Operation/InsertManyFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\InsertManyTest' => $baseDir . '/tests/Operation/InsertManyTest.php',
    'MongoDB\\Tests\\Operation\\InsertOneFunctionalTest' => $baseDir . '/tests/Operation/InsertOneFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\InsertOneTest' => $baseDir . '/tests/Operation/InsertOneTest.php',
    'MongoDB\\Tests\\Operation\\ListCollectionsFunctionalTest' => $baseDir . '/tests/Operation/ListCollectionsFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\ListCollectionsTest' => $baseDir . '/tests/Operation/ListCollectionsTest.php',
    'MongoDB\\Tests\\Operation\\ListDatabasesFunctionalTest' => $baseDir . '/tests/Operation/ListDatabasesFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\ListDatabasesTest' => $baseDir . '/tests/Operation/ListDatabasesTest.php',
    'MongoDB\\Tests\\Operation\\ListIndexesFunctionalTest' => $baseDir . '/tests/Operation/ListIndexesFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\ListIndexesTest' => $baseDir . '/tests/Operation/ListIndexesTest.php',
    'MongoDB\\Tests\\Operation\\MapReduceFunctionalTest' => $baseDir . '/tests/Operation/MapReduceFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\MapReduceTest' => $baseDir . '/tests/Operation/MapReduceTest.php',
    'MongoDB\\Tests\\Operation\\ModifyCollectionFunctionalTest' => $baseDir . '/tests/Operation/ModifyCollectionFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\ModifyCollectionTest' => $baseDir . '/tests/Operation/ModifyCollectionTest.php',
    'MongoDB\\Tests\\Operation\\ReplaceOneTest' => $baseDir . '/tests/Operation/ReplaceOneTest.php',
    'MongoDB\\Tests\\Operation\\TestCase' => $baseDir . '/tests/Operation/TestCase.php',
    'MongoDB\\Tests\\Operation\\UpdateFunctionalTest' => $baseDir . '/tests/Operation/UpdateFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\UpdateManyTest' => $baseDir . '/tests/Operation/UpdateManyTest.php',
    'MongoDB\\Tests\\Operation\\UpdateOneTest' => $baseDir . '/tests/Operation/UpdateOneTest.php',
    'MongoDB\\Tests\\Operation\\UpdateTest' => $baseDir . '/tests/Operation/UpdateTest.php',
    'MongoDB\\Tests\\Operation\\WatchFunctionalTest' => $baseDir . '/tests/Operation/WatchFunctionalTest.php',
    'MongoDB\\Tests\\Operation\\WatchTest' => $baseDir . '/tests/Operation/WatchTest.php',
    'MongoDB\\Tests\\PedantryTest' => $baseDir . '/tests/PedantryTest.php',
    'MongoDB\\Tests\\TestCase' => $baseDir . '/tests/TestCase.php',
    'MongoDB\\UpdateResult' => $baseDir . '/src/UpdateResult.php',
);