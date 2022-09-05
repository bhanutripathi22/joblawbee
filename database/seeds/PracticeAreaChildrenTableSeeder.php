<?php

use Illuminate\Database\Seeder;

class PracticeAreaChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practice_area_children')->insert(array(
            array(
                'name' => 'Ship Arrest or Release',
                'slug' => str_slug('Ship Arrest or Release'),
                'practice_area_id' => 1,
            ),

            array(
                'name' => 'Sale and Purchase',
                'slug' => str_slug('Sale and Purchase'),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Company incorporation',
                'slug' => str_slug('Company incorporation'),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Claims',
                'slug' => str_slug('Claims'),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Contracts ',
                'slug' => str_slug('Contracts '),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Charter Party',
                'slug' => str_slug('Charter Party'),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Ship Finance & Transactional',
                'slug' => str_slug('Ship Finance & Transactional'),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'P&I Settlements',
                'slug' => str_slug('P&I Settlements'),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Lien',
                'slug' => str_slug('Lien'),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Bill of Lading ',
                'slug' => str_slug('Bill of Lading '),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Fire ',
                'slug' => str_slug('Fire '),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Marine Insurance ',
                'slug' => str_slug('Marine Insurance '),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Dispute ',
                'slug' => str_slug('Dispute '),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Maritime Arbitration',
                'slug' => str_slug('Maritime Arbitration'),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Ship Building ',
                'slug' => str_slug('Ship Building '),
                'practice_area_id' => 1,
            ),
            array(
                'name' => 'Other ',
                'slug' => str_slug('Other '),
                'practice_area_id' => 1,
            ),

            #3 Banking, Finance and Capital Market
           array(
                'name' => 'Acquisition Financing',
                'slug' => str_slug('Acquisition Financing'),
                'practice_area_id' => 3,
           ),
            array(
                'name' => 'Asset based Lending and Securitization',
                'slug' => str_slug('Asset based Lending and Securitization'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Asset Purchase Financing',
                'slug' => str_slug('Asset Purchase Financing'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Asset Recovery',
                'slug' => str_slug('Asset Recovery'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Asset-Based Loans',
                'slug' => str_slug('Asset-Based Loans'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Corporate Finance ',
                'slug' => str_slug('Corporate Finance '),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Corporate Spin-outs ',
                'slug' => str_slug('Corporate Spin-outs '),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Corporate/IP',
                'slug' => str_slug('Corporate/IP'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Debt Financing',
                'slug' => str_slug('Debt Financing'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Debtor-in-Possession Financing',
                'slug' => str_slug('Debtor-in-Possession Financing'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'External Commercial Borrowing',
                'slug' => str_slug('External Commercial Borrowing'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Leveraged Buyouts',
                'slug' => str_slug('Leveraged Buyouts'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Leveraged Leasing',
                'slug' => str_slug('Leveraged Leasing'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Municipal Bonds',
                'slug' => str_slug('Municipal Bonds'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Private Equity',
                'slug' => str_slug('Private Equity'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Project Finance',
                'slug' => str_slug('Project Finance'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Real Estate Lending ',
                'slug' => str_slug('Real Estate Lending '),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Securities and  Securitized Financing',
                'slug' => str_slug('Securities and  Securitized Financing'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Strategic Advisory',
                'slug' => str_slug('Strategic Advisory'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Syndicated Loans and Participations',
                'slug' => str_slug('Syndicated Loans and Participations'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Synthetic Leases ',
                'slug' => str_slug('Synthetic Leases '),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Term Loans, Revolving Loans and Letter of Credit Facilities',
                'slug' => str_slug('Term Loans, Revolving Loans and Letter of Credit Facilities'),
                'practice_area_id' => 3,
            ),
            array(
                'name' => 'Venture Capital ',
                'slug' => str_slug('Venture Capital '),
                'practice_area_id' => 3,
            ),

            # 4 Corporate, Commercial and Contacts

            array(
                'name' => 'Business planning ',
                'slug' => str_slug('Business planning '),
                'practice_area_id' => 4,
            ),

            array(
                'name' => 'Capital Markets',
                'slug' => str_slug('Capital Markets'),
                'practice_area_id' => 4,
            ),

            array(
                'name' => 'Commercial Contracts ',
                'slug' => str_slug('Commercial Contracts'),
                'practice_area_id' => 4,
            ),

            array(
                'name' => 'Commercial Litigation',
                'slug' => str_slug('Commercial Litigation'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Compliance Management',
                'slug' => str_slug('Compliance Management'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Corporate Governance',
                'slug' => str_slug('Corporate Governance'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Corporate Recovery ',
                'slug' => str_slug('Corporate Recovery '),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Corporate re-organisation ',
                'slug' => str_slug('Corporate re-organisation '),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Cross-border investments ',
                'slug' => str_slug('Cross-border investments '),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Disinvestments',
                'slug' => str_slug('Disinvestments'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Due Diligence ',
                'slug' => str_slug('Due Diligence '),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Foreign Direct Investments',
                'slug' => str_slug('Foreign Direct Investments'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Franchising',
                'slug' => str_slug('Franchising'),
                'practice_area_id' => 4,
            ),
                array(
                    'name' => 'General Corporate',
                    'slug' => str_slug('General Corporate'),
                    'practice_area_id' => 4,
                ),
                array(
                    'name' => 'Government Contracts ',
                    'slug' => str_slug('Government Contracts '),
                    'practice_area_id' => 4,
                ),
                array(
                    'name' => 'Insurance',
                    'slug' => str_slug('Insurance'),
                    'practice_area_id' => 4,
                ),
                array(
                    'name' => 'International transaction',
                    'slug' => str_slug('International transaction'),
                    'practice_area_id' => 4,
                ),
                array(
                    'name' => 'Joint Ventures & Technical Collaborations',
                    'slug' => str_slug('Joint Ventures & Technical Collaborations'),
                    'practice_area_id' => 4,
                ),
                array(
                    'name' => 'Mergers and Acquisitions',
                    'slug' => str_slug('Mergers and Acquisitions'),
                    'practice_area_id' => 4,
                ),
            array(
                'name' => 'Outsourcing Arrangements',
                'slug' => str_slug('Outsourcing Arrangements'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Private Equity',
                'slug' => str_slug('Private Equity'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Privatization ',
                'slug' => str_slug('Privatization '),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Project Equity',
                'slug' => str_slug('Project Equity'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Real Estate',
                'slug' => str_slug('Real Estate'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Restructuring ',
                'slug' => str_slug('Restructuring '),
                'practice_area_id' => 4,
            ),

            array(
                'name' => 'Stock options ',
                'slug' => str_slug('Stock options '),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Technology Transfer & Licensing ',
                'slug' => str_slug('Technology Transfer & Licensing '),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Tenochlogy, Media, and Telecom',
                'slug' => str_slug('Tenochlogy, Media, and Telecom'),
                'practice_area_id' => 4,
            ),
            array(
                'name' => 'Transaction Support',
                'slug' => str_slug('Transaction Support'),
                'practice_area_id' => 4,
            ),
             array(
                'name' => 'Other',
                'slug' => str_slug('Other'),
                'practice_area_id' => 4,
            ),
            # 6 Dispute Resolution
            array(
                'name' => 'Bankruptcy & Financial Restructuring',
                'slug' => str_slug('Bankruptcy & Financial Restructuring'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Commercial Settlements',
                'slug' => str_slug('Commercial Settlements'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Domestic & International Arbitration',
                'slug' => str_slug('Domestic & International Arbitration'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Financial Services -  Regulatory',
                'slug' => str_slug('OthFinancial Services -  Regulatoryer'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Intellectual Property Litigations',
                'slug' => str_slug('Intellectual Property Litigations'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Labour & Employment',
                'slug' => str_slug('Labour & Employment'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Mediation & Conciliation',
                'slug' => str_slug('Mediation & Conciliation'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Regulatory matters related to tariff fixation',
                'slug' => str_slug('Regulatory matters related to tariff fixation'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Securities Litigation',
                'slug' => str_slug('Securities Litigation'),
                'practice_area_id' => 6,
            ),
            array(
                'name' => 'Real Estate Litigation',
                'slug' => str_slug('Real Estate Litigation'),
                'practice_area_id' => 6,
            ),

            # 9 Project Infrastructure 
            array(
                'name' => 'Airports',
                'slug' => str_slug('Airports'),
                'practice_area_id' => 9,
            ),
            array(
                'name' => 'Contract Management',
                'slug' => str_slug('Contract Management'),
                'practice_area_id' => 9,
            ),
            array(
                'name' => 'Oil and Gas',
                'slug' => str_slug('Oil and Gas'),
                'practice_area_id' => 9,
            ),
            array(
                'name' => 'Ports',
                'slug' => str_slug('Ports'),
                'practice_area_id' => 9,
            ),
            array(
                'name' => 'Power and Energy',
                'slug' => str_slug('Power and Energy'),
                'practice_area_id' => 9,
            ),
            array(
                'name' => 'Roads and Highways',
                'slug' => str_slug('Roads and Highways'),
                'practice_area_id' => 9,
            ),
            array(
                'name' => 'Special Economic Zones and IT Parks',
                'slug' => str_slug('Special Economic Zones and IT Parks'),
                'practice_area_id' => 9,
            ),
            array(
                'name' => 'Urban Transportation System including Rail',
                'slug' => str_slug('Urban Transportation System including Rail'),
                'practice_area_id' => 9,
            ),
            array(
                'name' => 'Waste and Water',
                'slug' => str_slug('Waste and Water'),
                'practice_area_id' => 9,
            ),

            # 10 Intellectual Property
            array(
                'name' => 'Trade Mark',
                'slug' => str_slug('Trade Mark'),
                'practice_area_id' => 10,
            ),
            array(
                'name' => 'Copyright ',
                'slug' => str_slug('Copyright '),
                'practice_area_id' => 10,
            ),

            array(
                'name' => 'Design',
                'slug' => str_slug('Design'),
                'practice_area_id' => 10,
            ),

            # 12 Property and Real Estate

            array(
                'name' => 'Commercial Property ',
                'slug' => str_slug('Commercial Property '),
                'practice_area_id' => 12,
            ),
            array(
                'name' => 'Construction',
                'slug' => str_slug('Construction'),
                'practice_area_id' => 12,
            ),

            array(
                'name' => 'Development',
                'slug' => str_slug('Development'),
                'practice_area_id' => 12,
            ),

            array(
                'name' => 'Sale and Purchase',
                'slug' => str_slug('Sale and Purchase'),
                'practice_area_id' => 12,
            ),

            array(
                'name' => 'Joint ventures',
                'slug' => str_slug('Joint ventures'),
                'practice_area_id' => 12,
            ),

            array(
                'name' => 'Property Litigation',
                'slug' => str_slug('Property Litigation'),
                'practice_area_id' => 12,
            ),

            array(
                'name' => 'Conveyancing',
                'slug' => str_slug('Conveyancing'),
                'practice_area_id' => 12,
            ),
            array(
                'name' => 'Title Search',
                'slug' => str_slug('Title Search'),
                'practice_area_id' => 12,
            ),
            array(
                'name' => 'Due-Diligence',
                'slug' => str_slug('Due-Diligence'),
                'practice_area_id' => 12,
            ),
            array(
                'name' => 'Other',
                'slug' => str_slug('Other'),
                'practice_area_id' => 12,
            ),

        ));
    }
}
