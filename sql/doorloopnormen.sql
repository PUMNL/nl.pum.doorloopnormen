CREATE TABLE IF NOT EXISTS civicrm_doorloopnormen (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(128) NULL,
  label VARCHAR(256) NULL,
  norm INT UNSIGNED NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

INSERT INTO civicrm_doorloopnormen (name, label, norm) VALUES
('expert_application', 'From start Expert application to end Expert application', 42),
('expert_application_assesment_cv', 'From start Expert application to assesment intake', 14),
('expert_application_filled_pum_cv', 'From start Expert application to filled out pum cv', 14),
('expert_application_activation_cv', 'From start Expert application to activation of expert', 14),
('from_request_to_approve_prof', 'From Request To Approve Prof', 10),
('from_customer_created_to_request', 'From Customer Created to Request', 1),
('from_request_to_approve_rep', 'From Request To Approve Rep', 3),
('from_approve_rep_to_approve_prof', 'From Approve Rep to Approve Prof', 7),
('from_approve_prof_to_first_main', 'From Approve Prof to First Main', 1),
('from_first_main_to_expert_reacted', 'From First Main to Expert Reacted', 10),
('from_expert_reacted_to_cv_sent', 'From Expert Reacted to CV Sent', 3),
('from_cv_sent_to_customer_approves', 'From CV Sent to Customer Approves', 5),
('from_customer_approves_to_start_logistics', 'From Customer Approves to Start Logistics', 1);