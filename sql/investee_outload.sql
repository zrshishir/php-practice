SELECT loan_applications.id as FundingID, users.id as UserID, out_loans.out_loan_type, out_loans.out_loan_amount, out_loans.out_loan_emi
FROM loan_applications
LEFT JOIN users ON loan_applications.user_id = users.id
LEFT JOIN professional_infos ON loan_applications.user_id = professional_infos.user_id
LEFT JOIN out_loans ON out_loans.professional_info_id = professional_infos.id;
