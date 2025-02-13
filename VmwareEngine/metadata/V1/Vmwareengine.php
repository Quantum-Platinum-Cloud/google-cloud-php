<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace GPBMetadata\Google\Cloud\Vmwareengine\V1;

class Vmwareengine
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
/google/cloud/vmwareengine/v1/vmwareengine.protogoogle.cloud.vmwareengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
NetworkConfig
management_cidr (	B�AV
vmware_engine_network (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork`
vmware_engine_network_canonical (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork1
$management_ip_address_layout_version (B�A"I
NodeTypeConfig

node_count (B�A
custom_core_count (B�A"�	
PrivateCloud
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A4
expire_time (2.google.protobuf.TimestampB�AD
state (20.google.cloud.vmwareengine.v1.PrivateCloud.StateB�AH
network_config	 (2+.google.cloud.vmwareengine.v1.NetworkConfigB�A]
management_cluster
 (2<.google.cloud.vmwareengine.v1.PrivateCloud.ManagementClusterB�A
description (	3
hcx (2!.google.cloud.vmwareengine.v1.HcxB�A3
nsx (2!.google.cloud.vmwareengine.v1.NsxB�A;
vcenter (2%.google.cloud.vmwareengine.v1.VcenterB�A
uid (	B�A�
ManagementCluster

cluster_id (	B�Aq
node_type_configs (2Q.google.cloud.vmwareengine.v1.PrivateCloud.ManagementCluster.NodeTypeConfigsEntryB�Ad
NodeTypeConfigsEntry
key (	;
value (2,.google.cloud.vmwareengine.v1.NodeTypeConfig:8"l
State
STATE_UNSPECIFIED 

ACTIVE
CREATING
UPDATING

FAILED
DELETED
PURGING:t�Aq
(vmwareengine.googleapis.com/PrivateCloudEprojects/{project}/locations/{location}/privateClouds/{private_cloud}"�
ListPrivateCloudsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListPrivateCloudsResponseB
private_clouds (2*.google.cloud.vmwareengine.v1.PrivateCloud
next_page_token (	
unreachable (	"X
GetPrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud"�
CreatePrivateCloudRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
private_cloud_id (	B�AF
private_cloud (2*.google.cloud.vmwareengine.v1.PrivateCloudB�A

request_id (	B�A
validate_only (B�A"�
UpdatePrivateCloudRequestF
private_cloud (2*.google.cloud.vmwareengine.v1.PrivateCloudB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
DeletePrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A
force (B�A
delay_hours (B�AH �B
_delay_hours"v
UndeletePrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A"�
Cluster
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A?
state (2+.google.cloud.vmwareengine.v1.Cluster.StateB�A

management (B�A
uid (	B�AZ
node_type_configs (2:.google.cloud.vmwareengine.v1.Cluster.NodeTypeConfigsEntryB�Ad
NodeTypeConfigsEntry
key (	;
value (2,.google.cloud.vmwareengine.v1.NodeTypeConfig:8"c
State
STATE_UNSPECIFIED 

ACTIVE
CREATING
UPDATING
DELETING
	REPAIRING:��A
#vmwareengine.googleapis.com/ClusterXprojects/{project}/locations/{location}/privateClouds/{private_cloud}/clusters/{cluster}"�
ListClustersRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	
filter (	
order_by (	"}
ListClustersResponse7
clusters (2%.google.cloud.vmwareengine.v1.Cluster
next_page_token (	
unreachable (	"N
GetClusterRequest9
name (	B+�A�A%
#vmwareengine.googleapis.com/Cluster"�
CreateClusterRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

cluster_id (	B�A;
cluster (2%.google.cloud.vmwareengine.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"�
UpdateClusterRequest4
update_mask (2.google.protobuf.FieldMaskB�A;
cluster (2%.google.cloud.vmwareengine.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"j
DeleteClusterRequest9
name (	B+�A�A%
#vmwareengine.googleapis.com/Cluster

request_id (	B�A"�
Subnet
name (	B�A
ip_cidr_range (	

gateway_ip (	
type (	B�A>
state (2*.google.cloud.vmwareengine.v1.Subnet.StateB�A"T
State
STATE_UNSPECIFIED 

ACTIVE
CREATING
UPDATING
DELETING:�A|
"vmwareengine.googleapis.com/SubnetVprojects/{project}/locations/{location}/privateClouds/{private_cloud}/subnets/{subnet}"}
ListSubnetsRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	"e
ListSubnetsResponse5
subnets (2$.google.cloud.vmwareengine.v1.Subnet
next_page_token (	"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
NodeType
name (	B�A
node_type_id (	B�A
display_name (	B�A
virtual_cpu_count (B�A
total_core_count (B�A
	memory_gb (B�A
disk_size_gb (B�A)
available_custom_core_counts (B�A:h�Ae
$vmwareengine.googleapis.com/NodeType=projects/{project}/locations/{location}/nodeTypes/{node_type}"�
ListNodeTypesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	"�
ListNodeTypesResponse:

node_types (2&.google.cloud.vmwareengine.v1.NodeType
next_page_token (	
unreachable (	"P
GetNodeTypeRequest:
name (	B,�A�A&
$vmwareengine.googleapis.com/NodeType"1
Credentials
username (	
password (	"d
ShowNsxCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud"h
ShowVcenterCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud"~
ResetNsxCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A"�
ResetVcenterCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A"�
ListHcxActivationKeysResponseK
hcx_activation_keys (2..google.cloud.vmwareengine.v1.HcxActivationKey
next_page_token (	
unreachable (	"�
HcxActivationKey
name (	B�A4
create_time (2.google.protobuf.TimestampB�AH
state (24.google.cloud.vmwareengine.v1.HcxActivationKey.StateB�A
activation_key (	B�A
uid (	B�A"I
State
STATE_UNSPECIFIED 
	AVAILABLE
CONSUMED
CREATING:��A�
,vmwareengine.googleapis.com/HcxActivationKeylprojects/{project}/locations/{location}/privateClouds/{private_cloud}/hcxActivationKeys/{hcx_activation_key}"�
ListHcxActivationKeysRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	"`
GetHcxActivationKeyRequestB
name (	B4�A�A.
,vmwareengine.googleapis.com/HcxActivationKey"�
CreateHcxActivationKeyRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloudO
hcx_activation_key (2..google.cloud.vmwareengine.v1.HcxActivationKeyB�A"
hcx_activation_key_id (	B�A

request_id (	"�
Hcx
internal_ip (	
version (	;
state (2\'.google.cloud.vmwareengine.v1.Hcx.StateB�A
fqdn (	"8
State
STATE_UNSPECIFIED 

ACTIVE
CREATING"�
Nsx
internal_ip (	
version (	;
state (2\'.google.cloud.vmwareengine.v1.Nsx.StateB�A
fqdn (	"8
State
STATE_UNSPECIFIED 

ACTIVE
CREATING"�
Vcenter
internal_ip (	
version (	?
state (2+.google.cloud.vmwareengine.v1.Vcenter.StateB�A
fqdn (	"8
State
STATE_UNSPECIFIED 

ACTIVE
CREATING"�
NetworkPolicy
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AS
internet_access (2:.google.cloud.vmwareengine.v1.NetworkPolicy.NetworkServiceO
external_ip (2:.google.cloud.vmwareengine.v1.NetworkPolicy.NetworkService
edge_services_cidr	 (	B�A
uid
 (	B�AV
vmware_engine_network (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork
description (	B�A`
vmware_engine_network_canonical (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork�
NetworkService
enabled (T
state (2@.google.cloud.vmwareengine.v1.NetworkPolicy.NetworkService.StateB�A"N
State
STATE_UNSPECIFIED 
UNPROVISIONED
RECONCILING

ACTIVE:x�Au
)vmwareengine.googleapis.com/NetworkPolicyHprojects/{project}/locations/{location}/networkPolicies/{network_policy}"�
ListNetworkPoliciesRequestA
parent (	B1�A�A+)vmwareengine.googleapis.com/NetworkPolicy
	page_size (

page_token (	
filter (	
order_by (	"�
ListNetworkPoliciesResponseE
network_policies (2+.google.cloud.vmwareengine.v1.NetworkPolicy
next_page_token (	
unreachable (	"Z
GetNetworkPolicyRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicy"�
UpdateNetworkPolicyRequestH
network_policy (2+.google.cloud.vmwareengine.v1.NetworkPolicyB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
CreateNetworkPolicyRequestA
parent (	B1�A�A+)vmwareengine.googleapis.com/NetworkPolicy
network_policy_id (	B�AH
network_policy (2+.google.cloud.vmwareengine.v1.NetworkPolicyB�A

request_id (	B�A"v
DeleteNetworkPolicyRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicy

request_id (	B�A"�
VmwareEngineNetwork
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
description (	W
vpc_networks (2<.google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetworkB�AK
state (27.google.cloud.vmwareengine.v1.VmwareEngineNetwork.StateB�AI
type (26.google.cloud.vmwareengine.v1.VmwareEngineNetwork.TypeB�A
uid	 (	B�A
etag
 (	�

VpcNetworkT
type (2A.google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork.TypeB�A7
network (	B&�A�A 
compute.googleapis.com/Network"J
Type
TYPE_UNSPECIFIED 
INTRANET
INTERNET
GOOGLE_CLOUD"T
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
UPDATING
DELETING"(
Type
TYPE_UNSPECIFIED 

LEGACY:��A�
/vmwareengine.googleapis.com/VmwareEngineNetworkTprojects/{project}/locations/{location}/vmwareEngineNetworks/{vmware_engine_network}"�
 CreateVmwareEngineNetworkRequestG
parent (	B7�A�A1/vmwareengine.googleapis.com/VmwareEngineNetwork%
vmware_engine_network_id (	B�AU
vmware_engine_network (21.google.cloud.vmwareengine.v1.VmwareEngineNetworkB�A

request_id (	B�A"�
 UpdateVmwareEngineNetworkRequestU
vmware_engine_network (21.google.cloud.vmwareengine.v1.VmwareEngineNetworkB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
 DeleteVmwareEngineNetworkRequestE
name (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork

request_id (	B�A
etag (	B�A"f
GetVmwareEngineNetworkRequestE
name (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork"�
ListVmwareEngineNetworksRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
 ListVmwareEngineNetworksResponseQ
vmware_engine_networks (21.google.cloud.vmwareengine.v1.VmwareEngineNetwork
next_page_token (	
unreachable (	2�9
VmwareEngine�
ListPrivateClouds6.google.cloud.vmwareengine.v1.ListPrivateCloudsRequest7.google.cloud.vmwareengine.v1.ListPrivateCloudsResponse"B���31/v1/{parent=projects/*/locations/*}/privateClouds�Aparent�
GetPrivateCloud4.google.cloud.vmwareengine.v1.GetPrivateCloudRequest*.google.cloud.vmwareengine.v1.PrivateCloud"@���31/v1/{name=projects/*/locations/*/privateClouds/*}�Aname�
CreatePrivateCloud7.google.cloud.vmwareengine.v1.CreatePrivateCloudRequest.google.longrunning.Operation"����B"1/v1/{parent=projects/*/locations/*}/privateClouds:private_cloud�A%parent,private_cloud,private_cloud_id�A!
PrivateCloudOperationMetadata�
UpdatePrivateCloud7.google.cloud.vmwareengine.v1.UpdatePrivateCloudRequest.google.longrunning.Operation"����P2?/v1/{private_cloud.name=projects/*/locations/*/privateClouds/*}:private_cloud�Aprivate_cloud,update_mask�A!
PrivateCloudOperationMetadata�
DeletePrivateCloud7.google.cloud.vmwareengine.v1.DeletePrivateCloudRequest.google.longrunning.Operation"d���3*1/v1/{name=projects/*/locations/*/privateClouds/*}�Aname�A!
PrivateCloudOperationMetadata�
UndeletePrivateCloud9.google.cloud.vmwareengine.v1.UndeletePrivateCloudRequest.google.longrunning.Operation"p���?":/v1/{name=projects/*/locations/*/privateClouds/*}:undelete:*�Aname�A!
PrivateCloudOperationMetadata�
ListClusters1.google.cloud.vmwareengine.v1.ListClustersRequest2.google.cloud.vmwareengine.v1.ListClustersResponse"M���></v1/{parent=projects/*/locations/*/privateClouds/*}/clusters�Aparent�

GetCluster/.google.cloud.vmwareengine.v1.GetClusterRequest%.google.cloud.vmwareengine.v1.Cluster"K���></v1/{name=projects/*/locations/*/privateClouds/*/clusters/*}�Aname�
CreateCluster2.google.cloud.vmwareengine.v1.CreateClusterRequest.google.longrunning.Operation"����G"</v1/{parent=projects/*/locations/*/privateClouds/*}/clusters:cluster�Aparent,cluster,cluster_id�A
ClusterOperationMetadata�
UpdateCluster2.google.cloud.vmwareengine.v1.UpdateClusterRequest.google.longrunning.Operation"����O2D/v1/{cluster.name=projects/*/locations/*/privateClouds/*/clusters/*}:cluster�Acluster,update_mask�A
ClusterOperationMetadata�
DeleteCluster2.google.cloud.vmwareengine.v1.DeleteClusterRequest.google.longrunning.Operation"x���>*</v1/{name=projects/*/locations/*/privateClouds/*/clusters/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListSubnets0.google.cloud.vmwareengine.v1.ListSubnetsRequest1.google.cloud.vmwareengine.v1.ListSubnetsResponse"L���=;/v1/{parent=projects/*/locations/*/privateClouds/*}/subnets�Aparent�
ListNodeTypes2.google.cloud.vmwareengine.v1.ListNodeTypesRequest3.google.cloud.vmwareengine.v1.ListNodeTypesResponse">���/-/v1/{parent=projects/*/locations/*}/nodeTypes�Aparent�
GetNodeType0.google.cloud.vmwareengine.v1.GetNodeTypeRequest&.google.cloud.vmwareengine.v1.NodeType"<���/-/v1/{name=projects/*/locations/*/nodeTypes/*}�Aname�
ShowNsxCredentials7.google.cloud.vmwareengine.v1.ShowNsxCredentialsRequest).google.cloud.vmwareengine.v1.Credentials"e���OM/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:showNsxCredentials�Aprivate_cloud�
ShowVcenterCredentials;.google.cloud.vmwareengine.v1.ShowVcenterCredentialsRequest).google.cloud.vmwareengine.v1.Credentials"i���SQ/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:showVcenterCredentials�Aprivate_cloud�
ResetNsxCredentials8.google.cloud.vmwareengine.v1.ResetNsxCredentialsRequest.google.longrunning.Operation"����S"N/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:resetNsxCredentials:*�Aprivate_cloud�A!
PrivateCloudOperationMetadata�
ResetVcenterCredentials<.google.cloud.vmwareengine.v1.ResetVcenterCredentialsRequest.google.longrunning.Operation"����W"R/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:resetVcenterCredentials:*�Aprivate_cloud�A!
PrivateCloudOperationMetadata�
CreateHcxActivationKey;.google.cloud.vmwareengine.v1.CreateHcxActivationKeyRequest.google.longrunning.Operation"����["E/v1/{parent=projects/*/locations/*/privateClouds/*}/hcxActivationKeys:hcx_activation_key�A/parent,hcx_activation_key,hcx_activation_key_id�A%
HcxActivationKeyOperationMetadata�
ListHcxActivationKeys:.google.cloud.vmwareengine.v1.ListHcxActivationKeysRequest;.google.cloud.vmwareengine.v1.ListHcxActivationKeysResponse"V���GE/v1/{parent=projects/*/locations/*/privateClouds/*}/hcxActivationKeys�Aparent�
GetHcxActivationKey8.google.cloud.vmwareengine.v1.GetHcxActivationKeyRequest..google.cloud.vmwareengine.v1.HcxActivationKey"T���GE/v1/{name=projects/*/locations/*/privateClouds/*/hcxActivationKeys/*}�Aname�
GetNetworkPolicy5.google.cloud.vmwareengine.v1.GetNetworkPolicyRequest+.google.cloud.vmwareengine.v1.NetworkPolicy"B���53/v1/{name=projects/*/locations/*/networkPolicies/*}�Aname�
ListNetworkPolicies8.google.cloud.vmwareengine.v1.ListNetworkPoliciesRequest9.google.cloud.vmwareengine.v1.ListNetworkPoliciesResponse"D���53/v1/{parent=projects/*/locations/*}/networkPolicies�Aparent�
CreateNetworkPolicy8.google.cloud.vmwareengine.v1.CreateNetworkPolicyRequest.google.longrunning.Operation"����E"3/v1/{parent=projects/*/locations/*}/networkPolicies:network_policy�A\'parent,network_policy,network_policy_id�A"
NetworkPolicyOperationMetadata�
UpdateNetworkPolicy8.google.cloud.vmwareengine.v1.UpdateNetworkPolicyRequest.google.longrunning.Operation"����T2B/v1/{network_policy.name=projects/*/locations/*/networkPolicies/*}:network_policy�Anetwork_policy,update_mask�A"
NetworkPolicyOperationMetadata�
DeleteNetworkPolicy8.google.cloud.vmwareengine.v1.DeleteNetworkPolicyRequest.google.longrunning.Operation"o���5*3/v1/{name=projects/*/locations/*/networkPolicies/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
CreateVmwareEngineNetwork>.google.cloud.vmwareengine.v1.CreateVmwareEngineNetworkRequest.google.longrunning.Operation"����Q"8/v1/{parent=projects/*/locations/*}/vmwareEngineNetworks:vmware_engine_network�A5parent,vmware_engine_network,vmware_engine_network_id�A(
VmwareEngineNetworkOperationMetadata�
UpdateVmwareEngineNetwork>.google.cloud.vmwareengine.v1.UpdateVmwareEngineNetworkRequest.google.longrunning.Operation"����g2N/v1/{vmware_engine_network.name=projects/*/locations/*/vmwareEngineNetworks/*}:vmware_engine_network�A!vmware_engine_network,update_mask�A(
VmwareEngineNetworkOperationMetadata�
DeleteVmwareEngineNetwork>.google.cloud.vmwareengine.v1.DeleteVmwareEngineNetworkRequest.google.longrunning.Operation"t���:*8/v1/{name=projects/*/locations/*/vmwareEngineNetworks/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
GetVmwareEngineNetwork;.google.cloud.vmwareengine.v1.GetVmwareEngineNetworkRequest1.google.cloud.vmwareengine.v1.VmwareEngineNetwork"G���:8/v1/{name=projects/*/locations/*/vmwareEngineNetworks/*}�Aname�
ListVmwareEngineNetworks=.google.cloud.vmwareengine.v1.ListVmwareEngineNetworksRequest>.google.cloud.vmwareengine.v1.ListVmwareEngineNetworksResponse"I���:8/v1/{parent=projects/*/locations/*}/vmwareEngineNetworks�AparentO�Avmwareengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
 com.google.cloud.vmwareengine.v1BVmwareengineProtoPZHgoogle.golang.org/genproto/googleapis/cloud/vmwareengine/v1;vmwareengine�Google.Cloud.VmwareEngine.V1�Google\\Cloud\\VmwareEngine\\V1�Google::Cloud::VmwareEngine::V1�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

