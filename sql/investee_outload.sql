-- details i
SELECT loan_applications.id, users.id, loan_applications.created_at, users.name, users.phone, loan_applications.amount, loan_applications.duration, loan_applications.disbursed_amount, loan_applications.monthly_funding_due, loan_applications.monthly_community_fee, loan_applications.monthly_payment_gateway_fee, loan_applications.total_monthly_payable, loan_applications.total_full_term_payable, loan_status_lists.status_for, loan_purposes.title, basic_infos.present_address, divisions.name, districts.name, users.email,genders.title, basic_infos.dob, CONCAT("a", basic_infos.gov_id_no), employment_types.title, monthly_income_types.title, employment_infos.name, employment_infos.phone, employment_infos.address, professional_infos.out_loan_availability, professional_infos.out_loan_no, educational_qualification_types.title, professional_infos.institute_name, marital_statuses.title, other_contacts.phone,  bank_details.account_no, bank_details.bank_name, loan_purposes.title AS LP, loan_applications.verified_at, loan_applications.rejected_at, loan_applications.invested_at, loan_applications.agree_accepted_at, loan_applications.disbursed_at, IF(ISNULL(documents.photo), 'No', 'Yes'), IF(ISNULL(documents.nid_front_page), 'No', 'Yes'), IF(ISNULL(documents.nid_back_page), 'No', 'Yes'), IF(ISNULL(documents.birth_certificate), 'No', 'Yes'), IF(ISNULL(documents.other_gov_issued_id), 'No', 'Yes'), IF(ISNULL(documents.salary_certificate), 'No', 'Yes'), IF(ISNULL(documents.bank_statement_first_page), 'No', 'Yes'), IF(ISNULL(documents.bank_statement_last_page), 'No', 'Yes'), IF(ISNULL(documents.electricity_bill), 'No', 'Yes'), IF(ISNULL(documents.additional_document1), 'No', 'Yes'), IF(ISNULL(documents.additional_document2), 'No', 'Yes'), IF(ISNULL(documents.additional_document3), 'No', 'Yes'), employment_infos.supervisor_name, employment_infos.supervisor_phone, other_contacts.relation
FROM loan_applications
LEFT JOIN loan_status_lists ON loan_applications.loan_status_id = loan_status_lists.id
LEFT JOIN loan_purposes ON loan_applications.loan_purpose_id = loan_purposes.id
LEFT JOIN users ON loan_applications.user_id = users.id
LEFT JOIN basic_infos ON loan_applications.user_id = basic_infos.user_id
LEFT JOIN professional_infos ON loan_applications.user_id = professional_infos.user_id
LEFT JOIN documents ON loan_applications.user_id = documents.user_id
LEFT JOIN bank_details ON loan_applications.user_id = bank_details.user_id
LEFT JOIN districts ON basic_infos.district_id = districts.id
LEFT JOIN divisions ON basic_infos.division_id = divisions.id
LEFT JOIN genders ON basic_infos.gender_id = genders.id
LEFT JOIN marital_statuses ON basic_infos.marital_status_id =  marital_statuses.id
LEFT JOIN employment_types ON professional_infos.employment_type_id = employment_types.id
LEFT JOIN monthly_income_types ON professional_infos.monthly_income_id = monthly_income_types.id
LEFT JOIN educational_qualification_types ON professional_infos.educational_qualification_id = educational_qualification_types.id
LEFT JOIN account_types ON bank_details.account_type = account_types.id
LEFT JOIN other_contacts ON users.id = other_contacts.user_id
LEFT JOIN employment_infos ON employment_infos.professional_info_id = professional_infos.id
LEFT JOIN out_loans ON out_loans.professional_info_id = professional_infos.id;



-- outloans details
SELECT loan_applications.id as FundingID, users.id as UserID, out_loans.out_loan_type, out_loans.out_loan_amount, out_loans.out_loan_emi
FROM loan_applications
LEFT JOIN users ON loan_applications.user_id = users.id
LEFT JOIN professional_infos ON loan_applications.user_id = professional_infos.user_id
LEFT JOIN out_loans ON out_loans.professional_info_id = professional_infos.id;

-- 1
SELECT transactions.who_pay, users.name, transactions.to_whom_id, transaction_types.title, transactions.tran_amount, investor_applications.duration, transactions.loan_id, transactions.tran_id
FROM transactions
LEFT JOIN users ON users.id = transactions.who_pay
LEFT JOIN transaction_types ON transactions.tran_type = transaction_types.id
LEFT JOIN investor_applications ON transactions.who_pay = investor_applications.user_id AND transactions.tran_amount = investor_applications.amount
WHERE users.user_type_id = 5
ORDER BY transactions.who_pay;

-- 2
SELECT loan_applications.id, loan_applications.user_id, users.name, loan_applications.disbursed_amount, loan_applications.shadhin_one_time_fee, loan_applications.duration, loan_applications.monthly_funding_due, loan_applications.monthly_community_fee, loan_applications.monthly_payment_gateway_fee, loan_applications.total_monthly_payable, loan_applications.created_at, loan_applications.signed_at, loan_applications.agree_accepted_at, loan_applications.disbursed_at, loan_applications.total_full_term_payable
FROM loan_applications
LEFT JOIN users ON users.id = loan_applications.user_id
WHERE loan_applications.loan_status_id > 4;

-- 3
SELECT emis.id, emis.loan_id, emis.transaction_title, emis.payment_end_date, emi_status_lists.title
FROM emis
LEFT JOIN emi_status_lists ON emi_status_lists.id = emis.emi_status_id;

-- 4
SELECT transactions.loan_id, transactions.emi_id, transactions.tran_amount, transactions.tran_date, emis.transaction_title, transactions.tran_id
FROM transactions
LEFT JOIN emis ON emis.id = transactions.emi_id
WHERE transactions.tran_type = 5;
