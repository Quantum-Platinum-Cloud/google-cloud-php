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

// [START privateca_v1_generated_CertificateAuthorityService_UpdateCaPool_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Security\PrivateCA\V1\CaPool;
use Google\Cloud\Security\PrivateCA\V1\CaPool\Tier;
use Google\Cloud\Security\PrivateCA\V1\CertificateAuthorityServiceClient;
use Google\Protobuf\FieldMask;
use Google\Rpc\Status;

/**
 * Update a [CaPool][google.cloud.security.privateca.v1.CaPool].
 *
 * @param int $caPoolTier Immutable. The [Tier][google.cloud.security.privateca.v1.CaPool.Tier] of this [CaPool][google.cloud.security.privateca.v1.CaPool].
 */
function update_ca_pool_sample(int $caPoolTier): void
{
    // Create a client.
    $certificateAuthorityServiceClient = new CertificateAuthorityServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $caPool = (new CaPool())
        ->setTier($caPoolTier);
    $updateMask = new FieldMask();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $certificateAuthorityServiceClient->updateCaPool($caPool, $updateMask);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var CaPool $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $caPoolTier = Tier::TIER_UNSPECIFIED;

    update_ca_pool_sample($caPoolTier);
}
// [END privateca_v1_generated_CertificateAuthorityService_UpdateCaPool_sync]
