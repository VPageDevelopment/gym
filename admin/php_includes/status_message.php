

            <!-- for showing errors and error check from back end -->
            <?php 

                if(isset($errMsg)){

            ?>
                <div class="ui  error message">
                    <i class="close icon"></i>
                    <ul>
                        <li> <?php echo $errMsg; ?></li>
                    </ul>
                </div>
                    <!-- ./ ui error message -->
            <?php
                }
            ?>
            <!-- / for showing errors and error check from back end  -->

            <!-- for showing success message ... -->
            <?php 

                if(isset($successMsg)){

            ?>
                <div class="ui positive message">
                    <i class="close icon"></i>
                    <ul>
                        <li> <?php echo $successMsg; ?></li>
                    </ul>
                </div>
                    <!-- ./ ui error message -->
            <?php
                }
            ?>
            <!-- /  for showing success message ...  -->