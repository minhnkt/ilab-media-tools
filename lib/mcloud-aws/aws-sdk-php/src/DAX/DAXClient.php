<?php

namespace MediaCloud\Vendor\Aws\DAX;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon DynamoDB Accelerator (DAX)** service.
 * @method \MediaCloud\Vendor\Aws\Result createCluster(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createParameterGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createParameterGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSubnetGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSubnetGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result decreaseReplicationFactor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise decreaseReplicationFactorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCluster(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteParameterGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteParameterGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSubnetGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSubnetGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeClusters(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDefaultParameters(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDefaultParametersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeParameterGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeParameterGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeParameters(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSubnetGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSubnetGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result increaseReplicationFactor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise increaseReplicationFactorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result rebootNode(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise rebootNodeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateCluster(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateParameterGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateParameterGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSubnetGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSubnetGroupAsync(array $args = [])
 */
class DAXClient extends AwsClient {}
