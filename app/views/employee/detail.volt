
{{ content() }}
<section class="content">
    <div class="container-fluid">
           <div class="block-header">
            <h2>EMPLOYEE ADD</h2>
            </div>
            <!-- Input -->
                <div class="row clearfix">
                    {{ form('employee/update', 'method' : 'post') }}

                    {{ myForm.render('id') }}

                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ myForm.label('firstname') }}
                            {{ myForm.render('firstname', ['class' : 'form-control']) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ myForm.label('lastname') }}
                            {{ myForm.render('lastname', ['class' : 'form-control']) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ myForm.label('age') }}
                            {{ myForm.render('age', ['class' : 'form-control']) }}
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ myForm.label('address') }}
                            {{ myForm.render('address', ['class' : 'form-control']) }}
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-xs-12">
                    		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
                    		{{ link_to('employee', '<i class="fa fa-arrow-left"></i> Cancel', 'class' : 'btn btn-danger') }}
                    	</div>
                    </div>

                {{ end_form() }}
        </div>
    </div>
</section>