<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

/**
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Class:ProviderContract' => 'Szolgáltatói szerződés',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:provider_id' => 'Szolgáltató',
	'Class:ProviderContract/Attribute:provider_id+' => '',
	'Class:ProviderContract/Attribute:sla' => 'SLA',
	'Class:ProviderContract/Attribute:sla+' => '',
	'Class:ProviderContract/Attribute:coverage' => 'Szolgáltatási idő',
	'Class:ProviderContract/Attribute:coverage+' => '',
	'Class:CustomerContract' => 'Ügyfél kapcsolattartó',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:org_id' => 'Ügyfél',
	'Class:CustomerContract/Attribute:org_id+' => '',
	'Class:CustomerContract/Attribute:provider_id' => 'Szállító',
	'Class:CustomerContract/Attribute:provider_id+' => '',
	'Class:CustomerContract/Attribute:support_team_id' => 'Támogató csoport',
	'Class:CustomerContract/Attribute:support_team_id+' => '',
	'Class:CustomerContract/Attribute:sla_list' => 'SLA-k',
	'Class:CustomerContract/Attribute:sla_list+' => '',
	'Class:CustomerContract/Attribute:provider_list' => 'Érvényes szerződések',
	'Class:CustomerContract/Attribute:provider_list+' => '',
	'Class:lnkCustomerContractToProviderContract' => 'Ügyfél szerződés / Szállítói szerződés',
	'Class:lnkCustomerContractToProviderContract+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:customer_contract_id' => 'Ügyfél szerződés',
	'Class:lnkCustomerContractToProviderContract/Attribute:customer_contract_id+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:provider_contract_id' => 'Szállítói szerződés',
	'Class:lnkCustomerContractToProviderContract/Attribute:provider_contract_id+' => '',
	'Class:lnkContractToSLA' => 'Szerződs / SLA',
	'Class:lnkContractToSLA+' => '',
	'Class:lnkContractToSLA/Attribute:contract_id' => 'Szerződés',
	'Class:lnkContractToSLA/Attribute:contract_id+' => '',
	'Class:lnkContractToSLA/Attribute:sla_id' => 'SLA',
	'Class:lnkContractToSLA/Attribute:sla_id+' => '',
	'Class:lnkContractToSLA/Attribute:coverage' => 'Szolgáltatási idő',
	'Class:lnkContractToSLA/Attribute:coverage+' => '',
	'Class:lnkContractToDoc' => 'Szerződés / Dokumentum',
	'Class:lnkContractToDoc+' => '',
	'Class:lnkContractToDoc/Attribute:contract_id' => 'Szerződés',
	'Class:lnkContractToDoc/Attribute:contract_id+' => '',
	'Class:lnkContractToDoc/Attribute:document_id' => 'Dokumentum',
	'Class:lnkContractToDoc/Attribute:document_id+' => '',
	'Class:lnkContractToContact' => 'Szerződés / Kapcsolattartó',
	'Class:lnkContractToContact+' => '',
	'Class:lnkContractToContact/Attribute:contract_id' => 'Szerződés',
	'Class:lnkContractToContact/Attribute:contract_id+' => '',
	'Class:lnkContractToContact/Attribute:contact_id' => 'Kapcsolattartó',
	'Class:lnkContractToContact/Attribute:contact_id+' => '',
	'Class:lnkContractToContact/Attribute:role' => 'Szerepkör',
	'Class:lnkContractToContact/Attribute:role+' => '',
	'Class:lnkContractToCI' => 'Szerződés / CI',
	'Class:lnkContractToCI+' => '',
	'Class:lnkContractToCI/Attribute:contract_id' => 'Szerződés',
	'Class:lnkContractToCI/Attribute:contract_id+' => '',
	'Class:lnkContractToCI/Attribute:ci_id' => 'CI',
	'Class:lnkContractToCI/Attribute:ci_id+' => '',
	'Class:Service' => 'Szolgáltatás',
	'Class:Service+' => '',
	'Class:Service/Attribute:org_id' => 'Szállító',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:name' => 'Neve',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:description' => 'Leírás',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:type' => 'Típus',
	'Class:Service/Attribute:type+' => '',
	'Class:Service/Attribute:type/Value:IncidentManagement' => 'Incidens menedzsment',
	'Class:Service/Attribute:type/Value:IncidentManagement+' => '',
	'Class:Service/Attribute:type/Value:RequestManagement' => 'Igény menedzsment',
	'Class:Service/Attribute:type/Value:RequestManagement+' => '',
	'Class:Service/Attribute:status' => 'Státusz',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:design' => 'Tervezés alatt',
	'Class:Service/Attribute:status/Value:design+' => '',
	'Class:Service/Attribute:status/Value:obsolete' => 'Elavult',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => 'Élesben',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:subcategory_list' => 'Szolgáltatás alkategóriák',
	'Class:Service/Attribute:subcategory_list+' => '',
	'Class:Service/Attribute:sla_list' => 'SLA-k',
	'Class:Service/Attribute:sla_list+' => '',
	'Class:Service/Attribute:document_list' => 'Dokumentumok',
	'Class:Service/Attribute:document_list+' => '',
	'Class:Service/Attribute:contact_list' => 'Kapcsolattartók',
	'Class:Service/Attribute:contact_list+' => '',
	'Class:ServiceSubcategory' => 'Szolgáltatás alkategória',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => 'Neve',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => 'Leírás',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => 'Szolgáltatás',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:SLA' => 'SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => 'Neve',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:service_id' => 'Szolgáltatás',
	'Class:SLA/Attribute:service_id+' => '',
	'Class:SLA/Attribute:slt_list' => 'SLT-k',
	'Class:SLA/Attribute:slt_list+' => '',
	'Class:SLT' => 'SLT',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => 'Neve',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:metric' => 'Metrika',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:TTO' => 'TTO',
	'Class:SLT/Attribute:metric/Value:TTO+' => '',
	'Class:SLT/Attribute:metric/Value:TTR' => 'TTR',
	'Class:SLT/Attribute:metric/Value:TTR+' => '',
	'Class:SLT/Attribute:ticket_priority' => 'Hibajegy prioritás',
	'Class:SLT/Attribute:ticket_priority+' => '',
	'Class:SLT/Attribute:ticket_priority/Value:1' => '1',
	'Class:SLT/Attribute:ticket_priority/Value:1+' => '',
	'Class:SLT/Attribute:ticket_priority/Value:2' => '2',
	'Class:SLT/Attribute:ticket_priority/Value:2+' => '',
	'Class:SLT/Attribute:ticket_priority/Value:3' => '3',
	'Class:SLT/Attribute:ticket_priority/Value:3+' => '',
	'Class:SLT/Attribute:value' => 'Érték',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:value_unit' => 'Egység',
	'Class:SLT/Attribute:value_unit+' => '',
	'Class:SLT/Attribute:value_unit/Value:days' => 'nap',
	'Class:SLT/Attribute:value_unit/Value:days+' => '',
	'Class:SLT/Attribute:value_unit/Value:hours' => 'óra',
	'Class:SLT/Attribute:value_unit/Value:hours+' => '',
	'Class:SLT/Attribute:value_unit/Value:minutes' => 'perc',
	'Class:SLT/Attribute:value_unit/Value:minutes+' => '',
	'Class:SLT/Attribute:sla_list' => 'SLA-k',
	'Class:SLT/Attribute:sla_list+' => '',
	'Class:lnkSLTToSLA' => 'SLT / SLA',
	'Class:lnkSLTToSLA+' => '',
	'Class:lnkSLTToSLA/Attribute:sla_id' => 'SLA',
	'Class:lnkSLTToSLA/Attribute:sla_id+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_id' => 'SLT',
	'Class:lnkSLTToSLA/Attribute:slt_id+' => '',
	'Class:lnkServiceToDoc' => 'Szolgáltatás / Dokumentum',
	'Class:lnkServiceToDoc+' => '',
	'Class:lnkServiceToDoc/Attribute:service_id' => 'Szolgáltatás',
	'Class:lnkServiceToDoc/Attribute:service_id+' => '',
	'Class:lnkServiceToDoc/Attribute:document_id' => 'Dokumentum',
	'Class:lnkServiceToDoc/Attribute:document_id+' => '',
	'Class:lnkServiceToContact' => 'Szolgáltatás / Kapcsolattartó',
	'Class:lnkServiceToContact+' => '',
	'Class:lnkServiceToContact/Attribute:service_id' => 'Szolgáltatás',
	'Class:lnkServiceToContact/Attribute:service_id+' => '',
	'Class:lnkServiceToContact/Attribute:contact_id' => 'Kapcsolattartó',
	'Class:lnkServiceToContact/Attribute:contact_id+' => '',
	'Class:lnkServiceToContact/Attribute:role' => 'Szerepkör',
	'Class:lnkServiceToContact/Attribute:role+' => '',
	'Class:lnkServiceToCI' => 'Szolgáltatás / CI',
	'Class:lnkServiceToCI+' => '',
	'Class:lnkServiceToCI/Attribute:service_id' => 'Szolgáltatás',
	'Class:lnkServiceToCI/Attribute:service_id+' => '',
	'Class:lnkServiceToCI/Attribute:ci_id' => 'CI',
	'Class:lnkServiceToCI/Attribute:ci_id+' => '',
	'Menu:ServiceManagement' => 'Szolgáltatás menedzsment',
	'Menu:ServiceManagement+' => '',
	'Menu:Service:Overview' => 'Áttekintő',
	'Menu:Service:Overview+' => '',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Szerződések szolgáltatás szintenként',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Szerződések státuszonként',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => '30 napon belül lejáró szerződések',
	'Menu:ProviderContract' => 'Szállítói szerződés',
	'Menu:ProviderContract+' => '',
	'Menu:CustomerContract' => 'Ügyfél szerződés',
	'Menu:CustomerContract+' => '',
	'Menu:ServiceSubcategory' => 'Szolgáltatás alkategóriák',
	'Menu:ServiceSubcategory+' => '',
	'Menu:Service' => 'Szolgáltatások',
	'Menu:Service+' => '',
	'Menu:SLA' => 'SLA-k',
	'Menu:SLA+' => '',
	'Menu:SLT' => 'SLT-k',
	'Menu:SLT+' => '',
	'Class:Contract' => 'Szerződés',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => 'Neve',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:description' => 'Leírás',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => 'Érvényesség kezdete',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => 'Érvényesség vége',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => 'Költség',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => 'Költség pénznem',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => 'Dollars',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => 'Euros',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:cost_unit' => 'Költség egység',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:billing_frequency' => 'Számlázási gyakoriság',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:contact_list' => 'Kapcsolattartók',
	'Class:Contract/Attribute:contact_list+' => '',
	'Class:Contract/Attribute:document_list' => 'Dokumentumok',
	'Class:Contract/Attribute:document_list+' => '',
	'Class:Contract/Attribute:ci_list' => 'CI-k',
	'Class:Contract/Attribute:ci_list+' => '',
	'Class:Contract/Attribute:finalclass' => 'Típus',
	'Class:Contract/Attribute:finalclass+' => '',
	'Class:ProviderContract/Attribute:provider_name' => 'Szállító neve',
	'Class:ProviderContract/Attribute:provider_name+' => '',
	'Class:CustomerContract/Attribute:org_name' => 'Ügyfél neve',
	'Class:CustomerContract/Attribute:org_name+' => '',
	'Class:CustomerContract/Attribute:provider_name' => 'Szállító neve',
	'Class:CustomerContract/Attribute:provider_name+' => '',
	'Class:CustomerContract/Attribute:support_team_name' => 'Támogató csoport',
	'Class:CustomerContract/Attribute:support_team_name+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:customer_contract_name' => 'Neve',
	'Class:lnkCustomerContractToProviderContract/Attribute:customer_contract_name+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:provider_contract_name' => 'Neve',
	'Class:lnkCustomerContractToProviderContract/Attribute:provider_contract_name+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:provider_sla' => 'Szállítói SLA',
	'Class:lnkCustomerContractToProviderContract/Attribute:provider_sla+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:provider_coverage' => 'Szogáltatási idő',
	'Class:lnkCustomerContractToProviderContract/Attribute:provider_coverage+' => '',
	'Class:lnkContractToSLA/Attribute:contract_name' => 'Szerződés',
	'Class:lnkContractToSLA/Attribute:contract_name+' => '',
	'Class:lnkContractToSLA/Attribute:sla_name' => 'SLA',
	'Class:lnkContractToSLA/Attribute:sla_name+' => '',
	'Class:lnkContractToDoc/Attribute:contract_name' => 'Szerződés',
	'Class:lnkContractToDoc/Attribute:contract_name+' => '',
	'Class:lnkContractToDoc/Attribute:document_name' => 'Dokumentum',
	'Class:lnkContractToDoc/Attribute:document_name+' => '',
	'Class:lnkContractToDoc/Attribute:document_type' => 'Dokumentum típus',
	'Class:lnkContractToDoc/Attribute:document_type+' => '',
	'Class:lnkContractToDoc/Attribute:document_status' => 'Dokumentum státusz',
	'Class:lnkContractToDoc/Attribute:document_status+' => '',
	'Class:lnkContractToContact/Attribute:contract_name' => 'Szerződés',
	'Class:lnkContractToContact/Attribute:contract_name+' => '',
	'Class:lnkContractToContact/Attribute:contact_name' => 'Kapcsolattartó',
	'Class:lnkContractToContact/Attribute:contact_name+' => '',
	'Class:lnkContractToContact/Attribute:contact_email' => 'Kapcsolattartó e-mail',
	'Class:lnkContractToContact/Attribute:contact_email+' => '',
	'Class:lnkContractToCI/Attribute:contract_name' => 'Szerződés',
	'Class:lnkContractToCI/Attribute:contract_name+' => '',
	'Class:lnkContractToCI/Attribute:ci_name' => 'CI',
	'Class:lnkContractToCI/Attribute:ci_name+' => '',
	'Class:lnkContractToCI/Attribute:ci_status' => 'CI státusz',
	'Class:lnkContractToCI/Attribute:ci_status+' => '',
	'Class:Service/Attribute:provider_name' => 'Szállító',
	'Class:Service/Attribute:provider_name+' => '',
	'Class:Service/Tab:Related_Contracts' => 'Kapcsolódó szerződések',
	'Class:Service/Tab:Related_Contracts+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => 'Szolgáltatás',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:SLA/Attribute:service_name' => 'Szolgáltatás',
	'Class:SLA/Attribute:service_name+' => '',
	'Class:lnkSLTToSLA/Attribute:sla_name' => 'SLA',
	'Class:lnkSLTToSLA/Attribute:sla_name+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_name' => 'SLT',
	'Class:lnkSLTToSLA/Attribute:slt_name+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_metric' => 'Metrika',
	'Class:lnkSLTToSLA/Attribute:slt_metric+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_ticket_priority' => 'Hibajegy prioritás',
	'Class:lnkSLTToSLA/Attribute:slt_ticket_priority+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_value' => 'Érték',
	'Class:lnkSLTToSLA/Attribute:slt_value+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_value_unit' => 'Egység',
	'Class:lnkSLTToSLA/Attribute:slt_value_unit+' => '',
	'Class:lnkServiceToDoc/Attribute:service_name' => 'Szogáltatás',
	'Class:lnkServiceToDoc/Attribute:service_name+' => '',
	'Class:lnkServiceToDoc/Attribute:document_name' => 'Dokumentum',
	'Class:lnkServiceToDoc/Attribute:document_name+' => '',
	'Class:lnkServiceToDoc/Attribute:document_type' => 'Dokumentum típus',
	'Class:lnkServiceToDoc/Attribute:document_type+' => '',
	'Class:lnkServiceToDoc/Attribute:document_status' => 'Dokumentum státusz',
	'Class:lnkServiceToDoc/Attribute:document_status+' => '',
	'Class:lnkServiceToContact/Attribute:service_name' => 'Szolgáltatás',
	'Class:lnkServiceToContact/Attribute:service_name+' => '',
	'Class:lnkServiceToContact/Attribute:contact_name' => 'Kapcsolattartó',
	'Class:lnkServiceToContact/Attribute:contact_name+' => '',
	'Class:lnkServiceToContact/Attribute:contact_email' => 'Kapcsolattartó e-mail',
	'Class:lnkServiceToContact/Attribute:contact_email+' => '',
	'Class:lnkServiceToCI/Attribute:service_name' => 'Szolgáltatás',
	'Class:lnkServiceToCI/Attribute:service_name+' => '',
	'Class:lnkServiceToCI/Attribute:ci_name' => 'CI',
	'Class:lnkServiceToCI/Attribute:ci_name+' => '',
	'Class:lnkServiceToCI/Attribute:ci_status' => 'CI státusz',
	'Class:lnkServiceToCI/Attribute:ci_status+' => '',
	'Menu:ServiceElement' => 'Sevice elements~~',
	'Menu:ServiceElement+' => 'Sevice elements~~',
	'Menu:DeliveryModel' => 'Delivery models~~',
	'Menu:DeliveryModel+' => 'Delivery models~~',
	'Menu:ServiceFamily' => 'Service families~~',
	'Menu:ServiceFamily+' => 'Service families~~',
	'Menu:Procedure' => 'Procedures catalog~~',
	'Menu:Procedure+' => 'All procedures catalog~~',
	'Class:Organization/Attribute:deliverymodel_id' => 'Delivery model~~',
	'Class:Organization/Attribute:deliverymodel_name' => 'Delivery model name~~',
	'Class:ContractType' => 'Contract Type~~',
	'Class:Contract/Attribute:org_id' => 'Customer~~',
	'Class:Contract/Attribute:organization_name' => 'Customer Name~~',
	'Class:Contract/Attribute:organization_name+' => 'Common name~~',
	'Class:Contract/Attribute:contacts_list' => 'Contacts~~',
	'Class:Contract/Attribute:contacts_list+' => 'All the contacts for this customer contract~~',
	'Class:Contract/Attribute:documents_list' => 'Documents~~',
	'Class:Contract/Attribute:documents_list+' => 'All the documents for this customer contract~~',
	'Class:Contract/Attribute:contracttype_id' => 'Contract type~~',
	'Class:Contract/Attribute:contracttype_name' => 'Contract type Name~~',
	'Class:Contract/Attribute:provider_id' => 'Provider~~',
	'Class:Contract/Attribute:provider_name' => 'Provider Name~~',
	'Class:Contract/Attribute:provider_name+' => 'Common name~~',
	'Class:Contract/Attribute:status' => 'Status~~',
	'Class:Contract/Attribute:status/Value:implementation' => 'implementation~~',
	'Class:Contract/Attribute:status/Value:implementation+' => 'implementation~~',
	'Class:Contract/Attribute:status/Value:obsolete' => 'obsolete~~',
	'Class:Contract/Attribute:status/Value:obsolete+' => 'obsolete~~',
	'Class:Contract/Attribute:status/Value:production' => 'production~~',
	'Class:Contract/Attribute:status/Value:production+' => 'production~~',
	'Class:CustomerContract/Attribute:services_list' => 'Services~~',
	'Class:CustomerContract/Attribute:services_list+' => 'All the services purchased for this contract~~',
	'Class:ProviderContract/Attribute:functionalcis_list' => 'CIs~~',
	'Class:ProviderContract/Attribute:functionalcis_list+' => 'All the configuration items covered by this provider contract~~',
	'Class:ProviderContract/Attribute:contracttype_id' => 'Contract type~~',
	'Class:ProviderContract/Attribute:contracttype_name' => 'Contract type name~~',
	'Class:lnkContactToContract' => 'Link Contact / Contract~~',
	'Class:lnkContactToContract/Attribute:contract_id' => 'Contract~~',
	'Class:lnkContactToContract/Attribute:contract_name' => 'Contract Name~~',
	'Class:lnkContactToContract/Attribute:contact_id' => 'Contact~~',
	'Class:lnkContactToContract/Attribute:contact_name' => 'Contact Name~~',
	'Class:lnkContractToDocument' => 'Link Contract / Document~~',
	'Class:lnkContractToDocument/Attribute:contract_id' => 'Contract~~',
	'Class:lnkContractToDocument/Attribute:contract_name' => 'Contract Name~~',
	'Class:lnkContractToDocument/Attribute:document_id' => 'Document~~',
	'Class:lnkContractToDocument/Attribute:document_name' => 'Document Name~~',
	'Class:lnkFunctionalCIToProviderContract' => 'Link FunctionalCI / ProviderContract~~',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id' => 'Provider contract~~',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name' => 'Provider contract Name~~',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id' => 'CI~~',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name' => 'CI Name~~',
	'Class:ServiceFamily' => 'Service Family~~',
	'Class:ServiceFamily/Attribute:name' => 'Name~~',
	'Class:ServiceFamily/Attribute:icon' => 'Icon~~',
	'Class:ServiceFamily/Attribute:services_list' => 'Services~~',
	'Class:ServiceFamily/Attribute:services_list+' => 'All the services in this category~~',
	'Class:Service/Attribute:organization_name' => 'Provider Name~~',
	'Class:Service/Attribute:servicefamily_id' => 'Service Family~~',
	'Class:Service/Attribute:servicefamily_name' => 'Service Family Name~~',
	'Class:Service/Attribute:documents_list' => 'Documents~~',
	'Class:Service/Attribute:documents_list+' => 'All the documents linked to the service~~',
	'Class:Service/Attribute:contacts_list' => 'Contacts~~',
	'Class:Service/Attribute:contacts_list+' => 'All the contacts for this service~~',
	'Class:Service/Attribute:status/Value:implementation' => 'implementation~~',
	'Class:Service/Attribute:status/Value:implementation+' => 'implementation~~',
	'Class:Service/Attribute:icon' => 'Icon~~',
	'Class:Service/Attribute:customercontracts_list' => 'Customer contracts~~',
	'Class:Service/Attribute:customercontracts_list+' => 'All the customer contracts that have purchased this service~~',
	'Class:Service/Attribute:providercontracts_list' => 'Provider contracts~~',
	'Class:Service/Attribute:providercontracts_list+' => 'All the provider contracts to support this service~~',
	'Class:Service/Attribute:functionalcis_list' => 'Depends on CIs~~',
	'Class:Service/Attribute:functionalcis_list+' => 'All the configuration items that are used to provide this service~~',
	'Class:Service/Attribute:servicesubcategories_list' => 'Service sub categories~~',
	'Class:Service/Attribute:servicesubcategories_list+' => 'All the sub categories for this service~~',
	'Class:lnkDocumentToService' => 'Link Document / Service~~',
	'Class:lnkDocumentToService/Attribute:service_id' => 'Service~~',
	'Class:lnkDocumentToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkDocumentToService/Attribute:document_id' => 'Document~~',
	'Class:lnkDocumentToService/Attribute:document_name' => 'Document Name~~',
	'Class:lnkContactToService' => 'Link Contact / Service~~',
	'Class:lnkContactToService/Attribute:service_id' => 'Service~~',
	'Class:lnkContactToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkContactToService/Attribute:contact_id' => 'Contact~~',
	'Class:lnkContactToService/Attribute:contact_name' => 'Contact Name~~',
	'Class:ServiceSubcategory/Attribute:request_type' => 'Request type~~',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => 'incident~~',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => 'incident~~',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => 'service request~~',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => 'service request~~',
	'Class:ServiceSubcategory/Attribute:status' => 'Status~~',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => 'implementation~~',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => 'implementation~~',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => 'obsolete~~',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => 'obsolete~~',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => 'production~~',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => 'production~~',
	'Class:SLA/Attribute:description' => 'description~~',
	'Class:SLA/Attribute:org_id' => 'Provider~~',
	'Class:SLA/Attribute:organization_name' => 'Provider Name~~',
	'Class:SLA/Attribute:organization_name+' => 'Common name~~',
	'Class:SLA/Attribute:slts_list' => 'SLTs~~',
	'Class:SLA/Attribute:slts_list+' => 'All the service level targets for this SLA~~',
	'Class:SLA/Attribute:customercontracts_list' => 'Customer contracts~~',
	'Class:SLA/Attribute:customercontracts_list+' => 'All the customer contracts using this SLA~~',
	'Class:SLT/Attribute:priority' => 'Priority~~',
	'Class:SLT/Attribute:priority/Value:1' => 'critical~~',
	'Class:SLT/Attribute:priority/Value:1+' => 'critical~~',
	'Class:SLT/Attribute:priority/Value:2' => 'high~~',
	'Class:SLT/Attribute:priority/Value:2+' => 'high~~',
	'Class:SLT/Attribute:priority/Value:3' => 'medium~~',
	'Class:SLT/Attribute:priority/Value:3+' => 'medium~~',
	'Class:SLT/Attribute:priority/Value:4' => 'low~~',
	'Class:SLT/Attribute:priority/Value:4+' => 'low~~',
	'Class:SLT/Attribute:request_type' => 'Request type~~',
	'Class:SLT/Attribute:request_type/Value:incident' => 'incident~~',
	'Class:SLT/Attribute:request_type/Value:incident+' => 'incident~~',
	'Class:SLT/Attribute:request_type/Value:service_request' => 'service request~~',
	'Class:SLT/Attribute:request_type/Value:service_request+' => 'service request~~',
	'Class:SLT/Attribute:metric/Value:tto' => 'TTO~~',
	'Class:SLT/Attribute:metric/Value:tto+' => 'TTO~~',
	'Class:SLT/Attribute:metric/Value:ttr' => 'TTR~~',
	'Class:SLT/Attribute:metric/Value:ttr+' => 'TTR~~',
	'Class:SLT/Attribute:unit' => 'Unit~~',
	'Class:SLT/Attribute:unit/Value:hours' => 'hours~~',
	'Class:SLT/Attribute:unit/Value:hours+' => 'hours~~',
	'Class:SLT/Attribute:unit/Value:minutes' => 'minutes~~',
	'Class:SLT/Attribute:unit/Value:minutes+' => 'minutes~~',
	'Class:lnkSLAToSLT' => 'Link SLA / SLT~~',
	'Class:lnkSLAToSLT/Attribute:sla_id' => 'SLA~~',
	'Class:lnkSLAToSLT/Attribute:sla_name' => 'SLA Name~~',
	'Class:lnkSLAToSLT/Attribute:slt_id' => 'SLT~~',
	'Class:lnkSLAToSLT/Attribute:slt_name' => 'SLT Name~~',
	'Class:lnkCustomerContractToService' => 'Link Customer Contract / Service~~',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => 'Customer contract~~',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => 'Customer contract Name~~',
	'Class:lnkCustomerContractToService/Attribute:service_id' => 'Service~~',
	'Class:lnkCustomerContractToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => 'SLA~~',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => 'SLA Name~~',
	'Class:lnkProviderContractToService' => 'Link Provider Contract / Service~~',
	'Class:lnkProviderContractToService/Attribute:service_id' => 'Service~~',
	'Class:lnkProviderContractToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkProviderContractToService/Attribute:providercontract_id' => 'Provider contract~~',
	'Class:lnkProviderContractToService/Attribute:providercontract_name' => 'Provider contract Name~~',
	'Class:lnkFunctionalCIToService' => 'Link FunctionalCI / Service~~',
	'Class:lnkFunctionalCIToService/Attribute:service_id' => 'Service~~',
	'Class:lnkFunctionalCIToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id' => 'CI~~',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name' => 'CI Name~~',
	'Class:DeliveryModel' => 'Delivery Model~~',
	'Class:DeliveryModel/Attribute:name' => 'Name~~',
	'Class:DeliveryModel/Attribute:org_id' => 'Organization~~',
	'Class:DeliveryModel/Attribute:organization_name' => 'Organization Name~~',
	'Class:DeliveryModel/Attribute:organization_name+' => 'Common name~~',
	'Class:DeliveryModel/Attribute:description' => 'Description~~',
	'Class:DeliveryModel/Attribute:contacts_list' => 'Contacts~~',
	'Class:DeliveryModel/Attribute:contacts_list+' => 'All the contacts (Teams and Person) for this delivery model~~',
	'Class:DeliveryModel/Attribute:customers_list' => 'Customers~~',
	'Class:DeliveryModel/Attribute:customers_list+' => 'All the customers having this delivering model~~',
	'Class:lnkDeliveryModelToContact' => 'Link Delivery Model / Contact~~',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => 'Delivery model~~',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => 'Delivery model name~~',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => 'Contact~~',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => 'Contact name~~',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => 'Role~~',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => 'Role name~~',
));
?>