<?php

//KUSKE - add  Prospectlists
$additionalModules[] = 'ProspectLists';
foreach ($exemptModules as $k => $v)
   if ($v=='ProspectLists')
      unset($exemptModules[$k]);

//KUSKE - add CampaignTrackers
$additionalModules[] = 'CampaignTrackers';
foreach ($exemptModules as $k => $v)
   if ($v=='CampaignTrackers')
      unset($exemptModules[$k]);

//KUSKE - add  ProductTemplates
$additionalModules[] = 'ProductTemplates';
foreach ($exemptModules as $k => $v)
   if ($v=='ProductTemplates')
      unset($exemptModules[$k]);

	  
//KUSKE - remove Process Maker modules
$exemptModules[] = 'pmse_Business_Rules';
$exemptModules[] = 'pmse_Emails_Templates';
$exemptModules[] = 'pmse_Inbox';
$exemptModules[] = 'pmse_Project';

$exemptModules[] = 'pmse_BpmAccessManagement';
$exemptModules[] = 'pmse_BpmActivityDefinition';
$exemptModules[] = 'pmse_BpmActivityStep';
$exemptModules[] = 'pmse_BpmActivityUser';
$exemptModules[] = 'pmse_BpmCaseData';
$exemptModules[] = 'pmse_BpmConfig';
$exemptModules[] = 'pmse_BpmDynaForm';
$exemptModules[] = 'pmse_BpmEventDefinition';
$exemptModules[] = 'pmse_BpmFlow ';
$exemptModules[] = 'pmse_BpmFormAction';
$exemptModules[] = 'pmse_BpmGatewayDefinition';
$exemptModules[] = 'pmse_BpmGroup';
$exemptModules[] = 'pmse_BpmGroupUser';
$exemptModules[] = 'pmse_BpmNotes';
$exemptModules[] = 'pmse_BpmProcessDefinition';
$exemptModules[] = 'pmse_BpmRelatedDependency';
$exemptModules[] = 'pmse_BpmThread';
$exemptModules[] = 'pmse_BpmnData';

$exemptModules[] = 'pmse_BpmFlow';
$exemptModules[] = 'pmse_BpmnActivity';
$exemptModules[] = 'pmse_BpmnArtifact';
$exemptModules[] = 'pmse_BpmnBound';
$exemptModules[] = 'pmse_BpmnDiagram';
$exemptModules[] = 'pmse_BpmnDocumentation';
$exemptModules[] = 'pmse_BpmnEvent';
$exemptModules[] = 'pmse_BpmnExtension';
$exemptModules[] = 'pmse_BpmnFlow';
$exemptModules[] = 'pmse_BpmnGateway';
$exemptModules[] = 'pmse_BpmnLane';
$exemptModules[] = 'pmse_BpmnLaneset';
$exemptModules[] = 'pmse_BpmnParticipant';
$exemptModules[] = 'pmse_BpmnProcess';


?>