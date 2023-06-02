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
                    <h4 class="record-title">View  Products</h4>
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
                                    <tr  class="td-category_id">
                                        <th class="title"> Category Id: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['category_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="category_id" 
                                                data-title="Enter Category Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['category_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-supplier_id">
                                        <th class="title"> Supplier Id: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['supplier_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="supplier_id" 
                                                data-title="Enter Supplier Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['supplier_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-product_name">
                                        <th class="title"> Product Name: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['product_name']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="product_name" 
                                                data-title="Enter Product Name" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['product_name']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-product_code">
                                        <th class="title"> Product Code: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['product_code']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="product_code" 
                                                data-title="Enter Product Code" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['product_code']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-root">
                                        <th class="title"> Root: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['root']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="root" 
                                                data-title="Enter Root" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['root']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-buying_price">
                                        <th class="title"> Buying Price: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['buying_price']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="buying_price" 
                                                data-title="Enter Buying Price" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['buying_price']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-selling_price">
                                        <th class="title"> Selling Price: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['selling_price']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="selling_price" 
                                                data-title="Enter Selling Price" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['selling_price']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-buying_date">
                                        <th class="title"> Buying Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['buying_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="buying_date" 
                                                data-title="Enter Buying Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['buying_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-image">
                                        <th class="title"> Image: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['image']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="image" 
                                                data-title="Browse..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['image']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-product_quantity">
                                        <th class="title"> Product Quantity: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['product_quantity']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="product_quantity" 
                                                data-title="Enter Product Quantity" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['product_quantity']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-created_at">
                                        <th class="title"> Created At: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['created_at']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
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
                                                data-url="<?php print_link("products/editfield/" . urlencode($data['id'])); ?>" 
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("products/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("products/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
