<?php

namespace MediaCloud\Vendor\Aws\WorkDocs;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkDocs** service.
 * @method \MediaCloud\Vendor\Aws\Result abortDocumentVersionUpload(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise abortDocumentVersionUploadAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result activateUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise activateUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addResourcePermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addResourcePermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createComment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCommentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createCustomMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCustomMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createFolder(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createFolderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLabels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLabelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createNotificationSubscription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createNotificationSubscriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deactivateUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deactivateUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteComment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCommentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCustomMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCustomMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDocument(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDocumentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFolder(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFolderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFolderContents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFolderContentsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLabels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLabelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteNotificationSubscription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteNotificationSubscriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeActivities(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeActivitiesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeComments(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeCommentsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDocumentVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDocumentVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeFolderContents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeFolderContentsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeNotificationSubscriptions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeNotificationSubscriptionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeResourcePermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeResourcePermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRootFolders(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRootFoldersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUsers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUsersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCurrentUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCurrentUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDocument(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDocumentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDocumentPath(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDocumentPathAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDocumentVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDocumentVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFolder(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFolderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFolderPath(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFolderPathAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResources(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result initiateDocumentVersionUpload(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise initiateDocumentVersionUploadAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeAllResourcePermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeAllResourcePermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeResourcePermission(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeResourcePermissionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDocument(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDocumentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDocumentVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDocumentVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFolder(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFolderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class WorkDocsClient extends AwsClient {}
