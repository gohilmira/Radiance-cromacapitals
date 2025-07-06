   <!-- <div class="container pages"> -->
       
               <?php
                $data['sr_no'] = $sr_no;;
                $data['table_data'] = $table_data;
                $data['base_url'] = $base_url;
                $data['source'] = $income_slug;

                $panel_directory = $this->conn->company_info('panel_directory');
                $all_saparate_income = array('level', 'direct', 'repurchase', 'royalty', 'binary');

                if ($income_slug == 'binary') {
                    $this->load->view($panel_directory . '/pages/incomes/binary_table', $data);
                }

                if ($income_slug == 'level') {
                    $this->load->view($panel_directory . '/pages/incomes/level_table', $data);
                }
                if ($income_slug == 'direct') {
                    $this->load->view($panel_directory . '/pages/incomes/direct_table', $data);
                }

                if ($income_slug == 'repurchase') {
                    $this->load->view($panel_directory . '/pages/incomes/repurchase_table', $data);
                }

                if ($income_slug == 'royalty') {
                    $this->load->view($panel_directory . '/pages/incomes/royalty_table', $data);
                }
                /* if($income_slug=='gen'){
                $this->load->view($panel_directory.'/pages/incomes/generation_table',$data);
            }*/
                if (!in_array($income_slug, $all_saparate_income)) {
                    $this->load->view($panel_directory . '/pages/incomes/all_income_table', $data);
                }
                ?>

           
   <!-- </div> -->