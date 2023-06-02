<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Orders</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-customer_id">
                                        <th class="title"> Customer Id: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['customer_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="customer_id" 
                                                data-title="Enter Customer Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['customer_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-qty">
                                        <th class="title"> Qty: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['qty']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="qty" 
                                                data-title="Enter Qty" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['qty']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-sub_total">
                                        <th class="title"> Sub Total: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['sub_total']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="sub_total" 
                                                data-title="Enter Sub Total" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['sub_total']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-vat">
                                        <th class="title"> Vat: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['vat']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="vat" 
                                                data-title="Enter Vat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['vat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-total">
                                        <th class="title"> Total: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['total']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="total" 
                                                data-title="Enter Total" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['total']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-pay">
                                        <th class="title"> Pay: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['pay']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="pay" 
                                                data-title="Enter Pay" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['pay']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-due">
                                        <th class="title"> Due: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['due']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="due" 
                                                data-title="Enter Due" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['due']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-payBy">
                                        <th class="title"> Payby: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['payBy']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="payBy" 
                                                data-title="Enter Payby" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['payBy']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-order_date">
                                        <th class="title"> Order Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['order_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="order_date" 
                                                data-title="Enter Order Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['order_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-order_month">
                                        <th class="title"> Order Month: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['order_month']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="order_month" 
                                                data-title="Enter Order Month" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['order_month']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-order_year">
                                        <th class="title"> Order Year: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['order_year']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="order_year" 
                                                data-title="Enter Order Year" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['order_year']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-created_at">
                                        <th class="title"> Created At: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['created_at']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="created_at" 
                                                data-title="Enter Created At" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['created_at']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-updated_at">
                                        <th class="title"> Updated At: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['updated_at']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("orders/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="updated_at" 
                                                data-title="Enter Updated At" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['updated_at']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("orders/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("orders/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
