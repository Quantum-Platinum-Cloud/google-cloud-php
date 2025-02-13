<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START dataflow_v1beta3_generated_MessagesV1Beta3_ListJobMessages_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Dataflow\V1beta3\JobMessage;
use Google\Cloud\Dataflow\V1beta3\MessagesV1Beta3Client;

/**
 * Request the job status.
 *
 * To request the status of a job, we recommend using
 * `projects.locations.jobs.messages.list` with a [regional endpoint]
 * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints). Using
 * `projects.jobs.messages.list` is not recommended, as you can only request
 * the status of jobs that are running in `us-central1`.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function list_job_messages_sample(): void
{
    // Create a client.
    $messagesV1Beta3Client = new MessagesV1Beta3Client();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $messagesV1Beta3Client->listJobMessages();

        /** @var JobMessage $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END dataflow_v1beta3_generated_MessagesV1Beta3_ListJobMessages_sync]
