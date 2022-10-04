<?php /* Template Name: Edit Pitch */ ?>

<?php 
get_header(); 
if(isset($_GET['step'])){
    $step = $_GET['step']; 
}
if(isset($_GET['id'])){
    $ptich_id = $_GET['id']; 
}

?>

 
    <section class="left-panel">

        <div class="lef-panel-menu d-flex justify-content-center">
                <ul>
                    <li><a href="#" class="<?php if(!$step) { echo "active"; } ?>" title="Company info">Company info</a></li>
                    <li><a href="#" class="<?php if($step=="pitch-deal") { echo "active"; } ?>" title="Pitch & Deal">Pitch & Deal</a></li>
                    <li><a href="#" class="<?php if($step=="team") { echo "active"; } ?>" title="Team">Team</a></li>
                    <li><a href="#" class="<?php if($step=="images-video") { echo "active"; } ?>" title="Images & Video">Images & Video</a></li>
                    <li><a href="#" class="<?php if($step=="documents") { echo "active"; } ?>" title="Documents">Documents</a></li>
                </ul>
        </div>


        <div class="second-left-panel">
            <ul class="mobile-menu d-flex justify-content-around align-items-center ">
                <li><a href="#" title="Privous"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-right.svg" alt="icon"></a></li>
                <li><a href="#" class="active" title="">Company info</a></li>
                <li><a href="#" title="Next"><img src="./assets/icons/arrow-right.svg" alt="icon"></a></li>
            </ul>
        </div>


<?php 
if(isset($_GET['step'])){
$step = $_GET['step']; if(!$step) { ?>        
        <div class="right-pannel">
             <ul class="d-flex justify-content-end back-btn">
                <li><a href="<?php the_permalink(355); ?>" title="Back to dashboard"> &lt; Back to dashboard</a></li>
            </ul>
            <form method="post" class="pitch_form_valiadation" id="company_info"> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Pitch Title</label>
                    <input type="text" name="pitchtitle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Pitch Title" value="<?php the_field('pitch_title',$ptich_id); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Website (optional)</label>
                    <input type="text" name="website" class="form-control" id="exampleInputPassword1" value="<?php the_field('website',$ptich_id); ?>" placeholder="Website">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Where is the managemet located?</label>
                    <?php $located = get_field('where_is_the_managemet_located',$ptich_id); ?>
                    <select id="inputState" name="state" class="form-control">
                        <option value="Assam" <?php if($located =="Assam"){echo ' selected="selected"';} ?>>Assam</option>
                        <option value="Bihar" <?php if($located =="Bihar"){echo ' selected="selected"';} ?>>Bihar</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                    <?php $country = get_field('country',$ptich_id); ?>
                    <select id="inputState" name="country" class="form-control">
                        <option selected>Please select</option>
                        <option value="India" <?php if($country =="India"){echo ' selected="selected"';} ?>>India</option>
                        <option value="Pakistan" <?php if($country =="Pakistan"){echo ' selected="selected"';} ?>>Pakistan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                    <input type="number" name="mobile" class="form-control" id="exampleInputPassword1" value="<?php the_field('mobile_number',$ptich_id); ?>"  placeholder="+91">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Industry 1</label>
                    <?php $industry_1 = get_field('industry_1',$ptich_id); ?>
                    <select id="inputState" name="industry1" class="form-control">
                        <option>Please select</option>
                        <option value="Industry 1" <?php if($industry_1 =="Industry 1"){echo ' selected="selected"';} ?>>Industry 1</option>
                        <option value="Industry 2" <?php if($industry_1 =="Industry 2"){echo ' selected="selected"';} ?>>Industry 2</option>
                        <option value="Industry 3" <?php if($industry_1 =="Industry 3"){echo ' selected="selected"';} ?>>Industry 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Industry 2 (optional)</label>
                    <?php $industry_2 = get_field('industry_2',$ptich_id); ?>
                    <select id="inputState" name="industry2" class="form-control">
                        <option selected>Please select</option>
                        <option value="Industry 1" <?php if($industry_2 =="Industry 1"){echo ' selected="selected"';} ?>>Industry 1</option>
                        <option value="Industry 2" <?php if($industry_2 =="Industry 2"){echo ' selected="selected"';} ?>>Industry 2</option>
                        <option value="Industry 3" <?php if($industry_2 =="Industry 3"){echo ' selected="selected"';} ?>>Industry 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Stage</label>
                    <?php $stage = get_field('stage',$ptich_id); ?>
                    <select id="inputState" name="stage" class="form-control">
                        <option value="Pre-Startup/R&D" <?php if($stage =="Pre-Startup/R&D"){echo ' selected="selected"';} ?>>Pre-Startup/R&amp;D</option>
                        <option value="MVP/Finished Product" <?php if($stage =="MVP/Finished Product"){echo ' selected="selected"';} ?>>MVP/Finished Product</option>
                        <option value="Achieving Sales" <?php if($stage =="Achieving Sales"){echo ' selected="selected"';} ?>>Achieving Sales</option>
                        <option value="Breaking Even" <?php if($stage =="Breaking Even"){echo ' selected="selected"';} ?>>Breaking Even</option>
                        <option value="Profitable" <?php if($stage =="Profitable"){echo ' selected="selected"';} ?> >Profitable</option>
                        <option value="Other" <?php if($stage =="Other"){echo ' selected="selected"';} ?>>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Idel Investor Role</label>
                    <?php $role = get_field('ideal_investor_role',$ptich_id); ?>
                    <select id="inputState" name="role" class="form-control">
                        <option value="Investor Role" <?php if($role =="Investor Role"){echo ' selected="selected"';} ?>>Investor Role</option>
                        <option value="Silent" <?php if($role =="Silent"){echo ' selected="selected"';} ?>>Silent</option>
                        <option value="Daily Involvement" <?php if($role =="Daily Involvement"){echo ' selected="selected"';} ?>>Daily Involvement</option>
                        <option value="Weekly Involvement" <?php if($role =="Weekly Involvement"){echo ' selected="selected"';} ?>>Weekly Involvement</option>
                        <option value="Monthly Involvement" <?php if($role =="Monthly Involvement"){echo ' selected="selected"';} ?>>Monthly Involvement</option>
                        <option value="Any" <?php if($role =="Any"){echo ' selected="selected"';} ?>>Any</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">If you did a previous round, how much did you raise?</label>
                    <?php $prev_fund = get_field('if_you_did_a_previous_round_how_much_did_you_raise',$ptich_id); ?>
                    <select id="inputState" name="previousfunds" class="form-control">
                        <option value="10,000" <?php if($prev_fund =="10,000"){echo ' selected="selected"';} ?>>10,000</option>
                        <option value="50,000" <?php if($prev_fund =="50,000"){echo ' selected="selected"';} ?>>50,000</option>
                        <option value="1,00,000" <?php if($prev_fund =="1,00,000"){echo ' selected="selected"';} ?>>1,00,000</option>
                        <option value="2,50,000" <?php if($prev_fund =="2,50,000"){echo ' selected="selected"';} ?>>2,50,000</option>
                        <option value="5,00,000" <?php if($prev_fund =="5,00,000"){echo ' selected="selected"';} ?>>5,00,000</option>
                        <option value="10,00,000" <?php if($prev_fund =="10,00,000"){echo ' selected="selected"';} ?>>10,00,000</option>
                        <option value="15,00,000" <?php if($prev_fund =="15,00,000"){echo ' selected="selected"';} ?>>15,00,000</option>
                        <option value="20,00,000" <?php if($prev_fund =="20,00,000"){echo ' selected="selected"';} ?>>20,00,000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">How much are you raising in total?</label>
                    <?php $rasing_intotal = get_field('how_much_are_you_raising_in_total',$ptich_id); ?>
                        <select id="inputState" name="rarisningintotal" class="form-control">
                            <option value="10,000" <?php if($rasing_intotal =="10,000"){echo ' selected="selected"';} ?>>10,000</option>
                            <option value="50,000" <?php if($rasing_intotal =="50,000"){echo ' selected="selected"';} ?>>50,000</option>
                            <option value="1,00,000" <?php if($rasing_intotal =="1,00,000"){echo ' selected="selected"';} ?>>1,00,000</option>
                            <option value="2,50,000" <?php if($rasing_intotal =="2,50,000"){echo ' selected="selected"';} ?>>2,50,000</option>
                            <option value="5,00,000" <?php if($rasing_intotal =="5,00,000"){echo ' selected="selected"';} ?>>5,00,000</option>
                            <option value="10,00,000" <?php if($rasing_intotal =="10,00,000"){echo ' selected="selected"';} ?>>10,00,000</option>
                            <option value="15,00,000" <?php if($rasing_intotal =="15,00,000"){echo ' selected="selected"';} ?>>15,00,000</option>
                            <option value="20,00,000" <?php if($rasing_intotal =="20,00,000"){echo ' selected="selected"';} ?>>20,00,000</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">How much of this total have you raised?</label>
                    <?php $total_raise = get_field('how_much_of_this_total_have_you_raised',$ptich_id); ?>
                    <select id="inputState" name="totalraised" class="form-control">
                        <option value="10,000" <?php if($total_raise =="10,000"){echo ' selected="selected"';} ?>>10,000</option>
                        <option value="50,000" <?php if($total_raise =="50,000"){echo ' selected="selected"';} ?>>50,000</option>
                        <option value="1,00,000" <?php if($total_raise =="1,00,000"){echo ' selected="selected"';} ?>>1,00,000</option>
                        <option value="2,50,000" <?php if($total_raise =="2,50,000"){echo ' selected="selected"';} ?>>2,50,000</option>
                        <option value="5,00,000" <?php if($total_raise =="5,00,000"){echo ' selected="selected"';} ?>>5,00,000</option>
                        <option value="10,00,000" <?php if($total_raise =="10,00,000"){echo ' selected="selected"';} ?>>10,00,000</option>
                        <option value="15,00,000" <?php if($total_raise =="15,00,000"){echo ' selected="selected"';} ?>>15,00,000</option>
                        <option value="20,00,000" <?php if($total_raise =="20,00,000"){echo ' selected="selected"';} ?>>20,00,000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">What is the minimum investment per investor?</label>
                    <?php $min_invest = get_field('what_is_the_minimum_investment_per_investor',$ptich_id); ?>
                    <select id="inputState" name="mininvest" class="form-control">
                        <option value="10,000" <?php if($min_invest =="10,000"){echo ' selected="selected"';} ?>>10,000</option>
                        <option value="50,000" <?php if($min_invest =="50,000"){echo ' selected="selected"';} ?>>50,000</option>
                        <option value="1,00,000" <?php if($min_invest =="1,00,000"){echo ' selected="selected"';} ?>>1,00,000</option>
                        <option value="2,50,000" <?php if($min_invest =="2,50,000"){echo ' selected="selected"';} ?>>2,50,000</option>
                        <option value="5,00,000" <?php if($min_invest =="5,00,000"){echo ' selected="selected"';} ?>>5,00,000</option>
                        <option value="10,00,000" <?php if($min_invest =="10,00,000"){echo ' selected="selected"';} ?>>10,00,000</option>
                        <option value="15,00,000" <?php if($min_invest =="15,00,000"){echo ' selected="selected"';} ?>>15,00,000</option>
                        <option value="20,00,000" <?php if($min_invest =="20,00,000"){echo ' selected="selected"';} ?>>20,00,000</option>
                    </select>
                </div>
                <div class="inner-banner-btn d-flex justify-content-center">
                    <button type="submit" name="company_submit" class="primary-btn" title="Save & Continue">Save & Continue</button>
                </div>
               
            </form>
        </div>
<?php } } ?>    


<?php 
if(isset($_GET['step'])){
$step = $_GET['step']; if($step=="pitch-deal") { ?>         
        <div class="right-pannel">
            <ul class="d-flex justify-content-end back-btn">
                 <li><a href="<?php the_permalink(355); ?>" title="Back to dashboard"> &lt; Back to dashboard</a></li>
            </ul>
            <p>20% complete</p>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <form class="middle-pannel-form pitch_form_valiadation" id="pitch_deal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Short
                        Summary <span>250 characters remaining</span></label>
                    <textarea name="summary" id="" rows="3" placeholder="Write here" ><?php the_field('short_summary',$ptich_id); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">The
                        Business<span>750 characters remaining</span></label>
                    <textarea name="business" id="" rows="3" placeholder="Write here" ><?php the_field('the_business',$ptich_id); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">The Market
                        <span>750 characters remaining</span></label>
                    <textarea name="market" id="" rows="3" placeholder="Write here" ><?php the_field('the_market',$ptich_id); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Progress/Proof<span>750 characters
                            remaining</span></label>
                    <textarea name="progressproof" id="" rows="3" placeholder="Write here"><?php the_field('progressproof',$ptich_id); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Objectives/Future<span>750 characters
                            remaining</span></label>
                    <textarea name="future" id="" rows="3" placeholder="Write here"><?php the_field('objectivesfuture',$ptich_id); ?></textarea>
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">Highlights</label>
                </div>

                <ul class="highlight_box">

                    <?php if( have_rows('highlights',$ptich_id) ): ?>
                        <?php while( have_rows('highlights',$ptich_id) ): the_row(); 
                            $highlight_text = get_sub_field('highlight_text',$ptich_id);
                            ?>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" name="highlight[]" class="form-control" value="<?php echo $highlight_text; ?>" id="exampleFormControlTextarea1">
                                            </div>
                                        </li>        
                        <?php endwhile; ?>
                    <?php endif; ?>


                    <input type="hidden" class="periods" name="periods" value=""> 
                </ul>




                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Loan<span>750 charactersremaining. </span></label>
                    <textarea name="loan" name="loan" id="" rows="3" placeholder="Write here" ><?php the_field('loan',$ptich_id); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Tags<span>Enter 5 to 10 relevant keywords. </span></label>
                    <textarea name="tags" id="" rows="3" placeholder="Write here" ><?php the_field('tags',$ptich_id); ?></textarea>
                </div>

                <div class="inner-banner-btn d-flex justify-content-center">
                    <a href="<?php the_permalink(801); ?>?id=<?php echo $ptich_id; ?>" class="primary-btn mr-3">Back</a>
                    <button type="submit" name="pitchdeal_submit" class="primary-btn" title="Save & Continue">Save & Continue</button>
                </div>

            </form>
        </div>
<?php } } ?>  


<?php 
if(isset($_GET['step'])){
$step = $_GET['step']; if($step=="team") { ?>        
        <div class="right-pannel">
        <ul class="d-flex justify-content-end back-btn">
            <li><a href="<?php the_permalink(355); ?>" title="Back to dashboard"> &lt; Back to dashboard</a></li>
            </ul>
            <p>40% complete</p>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <form class="middle-pannel-form pitch_form_valiadation" id="step_team" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Short
                        Summary <span>250 characters remaining</span></label>
                    <textarea name="team_summary" id="exampleFormControlTextarea1" rows="3" placeholder="Write here"><?php the_field('team_short_summary',$ptich_id); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Team Members</label>
                   <div class="repeat_team_member"> 




<?php if( have_rows('team_members',$ptich_id) ): ?>
    <?php while( have_rows('team_members',$ptich_id) ): the_row(); 
        $member_photo = get_sub_field('member_photo');
        $member_name = get_sub_field('member_name');
        $member_bio = get_sub_field('member_bio');
        $member_position = get_sub_field('member_position');
        $member_linkedin = get_sub_field('member_linkedin');
        ?>

                    <div class="team-member">
                        <div class="upload-photo">
                            <div class="imagePreview"><img class="previewImg" src="<?php echo $member_photo ; ?>" alt="Placeholder"></div>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload Photo
                                <input name="team_photo[]" type="file" class="uploadFile img image_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" >
                            </label>
                        </div>

                        <div class="form-group">
                            <input type="text" name="team_name[]" class="form-control" id=""
                                placeholder="Name" value="<?php echo $member_name ; ?>" >
                        </div>

                        <div class="form-group">
                            <input type="text" name="team_linkdine[]" class="form-control" id="" placeholder="LinkedIn" value="<?php echo $member_linkedin ; ?>" >
                        </div>

                        <div class="form-group">
                            <input type="text" name="team_position[]" class="form-control" id="" placeholder="Position" value="<?php echo $member_position ; ?>" >
                        </div>

                        <div class="form-group">
                            <textarea name="team_bio[]" id="" rows="3" placeholder="Bio"><?php echo $member_bio ; ?></textarea>
                        </div>

                    </div>


    <?php endwhile; ?>
<?php endif; ?>



                        <input type="hidden" class="periods" name="periods" value="">  
                </div>

                

                <div class="inner-banner-btn d-flex justify-content-center">
                     <a href="<?php the_permalink(801); ?>?step=pitch-deal&id=<?php echo $ptich_id; ?>" class="primary-btn mr-3">Back</a>
                     <button type="submit" name="team_submit" class="primary-btn" title="Save & Continue">Save & Continue</button>
                </div>
            </form>

        </div>
<?php } }?>   


<?php 
if(isset($_GET['step'])){
$step = $_GET['step']; if($step=="images-video") { ?>         
        <div class="right-pannel">
         <ul class="d-flex justify-content-end back-btn">
                <li><a href="<?php the_permalink(355); ?>" title="Back to dashboard"> &lt; Back to dashboard</a></li>
            </ul>
            <p>60% complete</p>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <form class="middle-pannel-form pitch_form_valiadation" id="image_video" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Logo</label>
                    <div class="upload-box d-flex justify-content-end">
                        <div class="upload_logos_box d-flex align-items-center">
                            <div class="image_box"><img class="previewImg" src="<?php echo get_field('project_logo',$ptich_id); ?>" alt="Placeholder"></div>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload Logo
                                <input type="file" name="project_logo" class="uploadFile img image_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept="image/png, image/gif, image/jpeg, image/svg" />
                            </label>
                        </div>
                        <span>
                            Size 120*120 pixels
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Banner image</label>
                    <div class="upload-box d-flex  justify-content-end">
                        <div class="upload_logos_box d-flex align-items-center">
                            <div class="image_box"><img class="previewImg" src="<?php echo get_field('banner_image',$ptich_id); ?>" alt="Placeholder"></div>    
                            <label class="add-section-btn" title="Upload Photo">
                                Add Image
                                <input type="file" name="banner" class="uploadFile img image_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept="image/png, image/gif, image/jpeg, image/svg" />
                            </label>
                        </div>
                        <span>
                            Size 1080*450 pixels
                        </span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Images</label>
                    <div class="upload-box d-flex  justify-content-end">
                        <div class="upload_logos_box d-flex align-items-center">
                        </div>
                        <span>
                            Max 20 mb
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Images</label>
                    <div class="upload-box d-flex  justify-content-end">
                        <input type="url" name="video_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="<?php echo get_field('project_video_link',$ptich_id); ?>" value="<?php echo get_field('project_video_link',$ptich_id); ?>" >
                        <span>Insert only the video link</span>
                    </div>
                    
                </div>


                <div class="inner-banner-btn d-flex justify-content-center">
                    <a href="<?php the_permalink(801); ?>?step=team&id=<?php echo $ptich_id; ?>" class="primary-btn mr-3">Back</a>
                    <button name="imgvideo_submit" type="submit" class="primary-btn" title="Save & Continue">Save & Continue</button>
                </div>
            </form>    
        </div>
<?php } } ?>


<?php 
if(isset($_GET['step'])){
$step = $_GET['step']; if($step=="documents") { ?>         
        <div class="right-pannel">
            <ul class="d-flex justify-content-end back-btn">
                <li><a href="<?php the_permalink(355); ?>" title="Back to dashboard"> &lt; Back to dashboard</a></li>
            </ul>
            <p>80% complete</p>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <form class="middle-pannel-form pitch_form_valiadation" id="step_documents" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Business
                        Plan</label>
                    <div class="upload-box d-flex  justify-content-end">
                    <div class="upload_logos_box d-flex align-items-center">
                            <?php 
                            $buiseness_file_url = get_field('business_plan',$ptich_id); 
                            $buiseness_file_name = basename(parse_url($buiseness_file_url, PHP_URL_PATH));
                            ?>
                            <a href="<?php echo $buiseness_file_url; ?>" class="file_name" target="_blank"><?php echo $buiseness_file_name;?></a>
                        <label class="add-section-btn" title="Upload Photo">
                            Upload File
                            <input type="file" class="uploadFile img file_type" name="business_plan" 
                                style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                        </label>
                    </div>
                        <span>
                            Files: Word, Excel, PowerPoint & PDF. Max file size: 10MB
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Financials</label>
                    <div class="upload-box d-flex  justify-content-end">
                        <div class="upload_logos_box d-flex align-items-center">
                            <?php 
                            $financials_url = get_field('financials',$ptich_id); 
                            $financials_name = basename(parse_url($financials_url, PHP_URL_PATH));
                            ?>
                        <a href="<?php echo $financials_url; ?>" class="file_name" target="_blank"><?php echo $financials_name;?></a>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload File
                                <input type="file" name="financials" class="uploadFile img file_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                            </label>
                        </div>
                        <span>
                            Files: Word, Excel, PowerPoint & PDF. Max file size: 10MBs
                        </span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Slide
                        Deck</label>
                    <div class="upload-box d-flex  justify-content-end">
                        <div class="upload_logos_box d-flex align-items-center">
                            <?php 
                            $slide_deck_url = get_field('slide_deck',$ptich_id); 
                            $slide_deck_name = basename(parse_url($slide_deck_url, PHP_URL_PATH));
                            ?>
                            <a href="<?php echo $slide_deck_url; ?>" class="file_name" target="_blank"><?php echo $slide_deck_name;?></a>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload File
                                <input type="file" name="slidedeck" class="uploadFile img file_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                            </label>
                        </div>
                        <span>
                            Files: Word, Excel, PowerPoint & PDF. Max file size: 10MB
                        </span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Executive
                        Summary</label>
                    <div class="upload-box d-flex  justify-content-end">
                    <div class="upload_logos_box d-flex align-items-center">
                            <?php 
                            $executive_summary_url = get_field('executive_summary',$ptich_id); 
                            $executive_summary_name = basename(parse_url($executive_summary_url, PHP_URL_PATH));
                            ?>
                            <a href="<?php echo $executive_summary_url; ?>" class="file_name" target="_blank"><?php echo $executive_summary_name;?></a>
                        <label class="add-section-btn" title="Upload Photo">
                            Upload File
                            <input type="file" name="executive" class="uploadFile img file_type" value="Upload Photo"
                                style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                        </label>
                    </div>
                        <span>
                            Files: Word, Excel, PowerPoint & PDF. Max file size: 10MB
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">Additional
                        Documents</label>
                    <div class="upload-box d-flex  justify-content-end">
                        <div class="upload_logos_box d-flex align-items-center">
                            <?php 
                            $additional_documents_url = get_field('additional_documents',$ptich_id); 
                            $additional_documents_name = basename(parse_url($additional_documents_url, PHP_URL_PATH));
                            ?>
                                <a href="<?php echo $additional_documents_url; ?>" class="file_name" target="_blank"><?php echo $additional_documents_name;?></a>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload File
                                <input type="file" name="additionaldoc" class="uploadFile img file_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                            </label>
                        </div>
                        <span>
                            Files: Word, Excel, PowerPoint & PDF. Max file size: 10MB
                        </span>
                    </div>
                </div>

                <div class="inner-banner-btn d-flex justify-content-center">
                    <a href="<?php the_permalink(801); ?>?step=images-video&id=<?php echo $ptich_id; ?>" class="primary-btn mr-3">Back</a>
                    <button name="document_submit" type="submit" class="primary-btn" title="Save & Continue">Submit</button>
                </div>
                </form>
        </div>
<?php } } ?>  


    </section> 
<?php
if(isset($_POST["company_submit"]))
{

   $pitch_title = $_POST['pitchtitle'];
   $website = $_POST['website'];
   $state = $_POST['where_is_the_managemet_located'];
   $country = $_POST['country'];
   $mobile = $_POST['mobile'];
   $industry1 = $_POST['industry1'];
   $industry2 = $_POST['industry2'];
   $stage = $_POST['stage'];
   $role = $_POST['role'];
   $previousfunds = $_POST['previousfunds'];
   $rarisningintotal = $_POST['rarisningintotal'];
   $totalraised = $_POST['totalraised'];
   $mininvest = $_POST['mininvest'];
    

    global $wpdb;
 
    $url = site_url()."/edit-pitch/?step=pitch-deal&id=".$ptich_id; 
    update_post_meta($ptich_id,'pitch_title',$pitch_title);
    update_post_meta($ptich_id,'website',$website);
    update_post_meta($ptich_id,'where_is_the_managemet_located',$state);
    update_post_meta($ptich_id,'country',$country);
    update_post_meta($ptich_id,'mobile_number',$mobile);
    update_post_meta($ptich_id,'industry_1',$industry1);
    update_post_meta($ptich_id,'industry_2',$industry2);
    update_post_meta($ptich_id,'stage',$stage);
    update_post_meta($ptich_id,'ideal_investor_role',$role);
    update_post_meta($ptich_id,'if_you_did_a_previous_round_how_much_did_you_raise',$previousfunds);
    update_post_meta($ptich_id,'how_much_are_you_raising_in_total',$rarisningintotal);
    update_post_meta($ptich_id,'how_much_of_this_total_have_you_raised',$totalraised);
    update_post_meta($ptich_id,'what_is_the_minimum_investment_per_investor',$mininvest);

    wp_redirect( $url );

}
if(isset($_POST["pitchdeal_submit"]))
{
    $summary = $_POST['summary'];
    $business = $_POST['business'];
    $market = $_POST['market'];
    $progressproof = $_POST['progressproof'];
    $future = $_POST['future'];
    $loan = $_POST['loan'];
    $tags = $_POST['tags'];
    $highlights = $_POST['highlight'];
    
    $periods = $_POST['periods'];
    $ptich_id = $_GET["id"];  
    $url = site_url()."/edit-pitch/?step=team&id=".$ptich_id; 

    $i=0;
    foreach($highlights as $highlight){
        update_sub_field( array("highlights", $i+1, "highlight_text"), $highlight, $ptich_id);
        $i++;
    }

    update_post_meta($ptich_id,'short_summary',$summary);
    update_post_meta($ptich_id,'the_business',$business);
    update_post_meta($ptich_id,'the_market',$market);
    update_post_meta($ptich_id,'progressproof',$progressproof);
    update_post_meta($ptich_id,'objectivesfuture',$future);
    update_post_meta($ptich_id,'loan',$tags);
    update_post_meta($ptich_id,'tags',$tags);

    wp_redirect( $url );

}
if(isset($_POST["team_submit"]))
{

    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );            
    
    $team_summary = $_POST['team_summary'];
    $team_photos = $_FILES['team_photo'];
    $team_names = $_POST['team_name'];
    $team_linkdines = $_POST['team_linkdine'];
    $team_positions = $_POST['team_position'];
    $team_bios = $_POST['team_bio'];
    $ptich_id = $_GET["id"];  
    $url = site_url()."/edit-pitch/?step=images-video&id=".$ptich_id; 


    $periods = intval(get_post_meta($ptich_id, 'team_members', true));
    //echo $periods;

    for ($x = 0; $x <= $periods-1; $x++) {
        
        $photo_group=[];
        foreach($team_photos as $k => $test){
            $photo_group[$k]=$test[$x];
        }    
        echo "<pre>";
        print_r($photo_group);           
        $team_photo_movefile = wp_handle_upload( $photo_group, array('test_form' => false) );
        
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($team_photo_movefile['file']),
            'post_mime_type' => $team_photo_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($team_photo_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id[$x] = wp_insert_attachment($attachment, $team_photo_movefile['file']);      
        echo $attach_id[$x]."<br>";
        if ( !is_wp_error( $attach_id[$x] )) {
            $attach_meta[$x] = wp_generate_attachment_metadata( $attach_id[$x], $team_photo_movefile['file'] );
            wp_update_attachment_metadata( $attach_id[$x], $attach_meta[$x] );
        }       
        update_sub_field( array("team_members", $x+1, "member_photo"), $attach_id[$x], $ptich_id);
    }

    $i=0;
    foreach($team_names as $team_name){
        update_sub_field( array("team_members", $i+1, "member_name"), $team_name, $ptich_id);
        $i++;
    }
    $j=0;
    foreach($team_linkdines as $team_linkdine){
        update_sub_field( array("team_members", $j+1, "member_linkedin"), $team_linkdine, $ptich_id);
        $j++;
    }
    $k=0;
    foreach($team_positions as $team_position){
        update_sub_field( array("team_members", $k+1, "member_position"), $team_position, $ptich_id);
        $k++;
    }
    $l=0;
    foreach($team_bios as $team_bio){
        update_sub_field( array("team_members", $l+1, "member_bio"), $team_bio, $ptich_id);
        $l++;
    }        


    update_post_meta($ptich_id,'team_short_summary',$team_summary);

    wp_redirect( $url );

}
if(isset($_POST["imgvideo_submit"]))
{
    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
    require_once(ABSPATH . "wp-admin" . '/includes/media.php');

    $project_logo = $_FILES['project_logo'];
    $banner = $_FILES['banner'];
    $project_gallery = $_FILES['project_gallery'];
    $video_link = $_POST['video_link'];
    $ptich_id = $_GET["id"];  
    $url = site_url()."/edit-pitch/?step=documents&id=".$ptich_id; 


    $project_logo_movefile = wp_handle_upload( $project_logo, array('test_form' => false) );
    $banner_movefile = wp_handle_upload( $banner, array('test_form' => false) );
    $project_gallery_movefile = wp_handle_upload( $project_gallery, array('test_form' => false) );

    if ( $project_logo_movefile && !isset($project_logo_movefile['error']) ) {
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($project_logo_movefile['file']),
            'post_mime_type' => $project_logo_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($project_logo_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $project_logo_movefile['file']);      
        if ( !is_wp_error( $attach_id )) {
            $attach_meta = wp_generate_attachment_metadata( $attach_id, $project_logo_movefile['file'] );
            wp_update_attachment_metadata( $attach_id, $attach_meta );
        }            
        update_field('project_logo', $attach_id, $ptich_id);
    }
    if ( $banner_movefile && !isset($banner_movefile['error']) ) {
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($banner_movefile['file']),
            'post_mime_type' => $banner_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($banner_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $banner_movefile['file']);      
        if ( !is_wp_error( $attach_id )) {
            $attach_meta = wp_generate_attachment_metadata( $attach_id, $banner_movefile['file'] );
            wp_update_attachment_metadata( $attach_id, $attach_meta );
        }            
        update_field('banner_image', $attach_id, $ptich_id);
    }
    if ( $project_gallery_movefile && !isset($project_gallery_movefile['error']) ) {
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($project_gallery_movefile['file']),
            'post_mime_type' => $project_gallery_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($project_gallery_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $project_gallery_movefile['file']);      
        if ( !is_wp_error( $attach_id )) {
            $attach_meta = wp_generate_attachment_metadata( $attach_id, $project_gallery_movefile['file'] );
            wp_update_attachment_metadata( $attach_id, $attach_meta );
        }            
        update_field('project_gallery', $attach_id, $ptich_id);
    }
            
    update_post_meta($ptich_id,'project_video_link',$video_link);    

    wp_redirect( $url );


}
if(isset($_POST["document_submit"]))
{

    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
    require_once(ABSPATH . "wp-admin" . '/includes/media.php');

    $business = $_FILES['business_plan'];
    $financials = $_FILES['financials'];
    $slidedeck = $_FILES['slidedeck'];
    $executive = $_FILES['executive'];
    $additionaldoc = $_FILES['additionaldoc'];
    $ptich_id = $_GET["id"];  

    $business_movefile = wp_handle_upload( $business, array('test_form' => false) );
    $financials_movefile = wp_handle_upload( $financials, array('test_form' => false) );
    $slidedeck_movefile = wp_handle_upload( $slidedeck, array('test_form' => false) );
    $executive_movefile = wp_handle_upload( $executive, array('test_form' => false) );
    $additionaldoc_movefile = wp_handle_upload( $additionaldoc, array('test_form' => false) );

    if ( $business_movefile && !isset($business_movefile['error']) ) {
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($business_movefile['file']),
            'post_mime_type' => $business_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($business_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $business_movefile['file']);      
        if ( !is_wp_error( $attach_id )) {
            $attach_meta = wp_generate_attachment_metadata( $attach_id, $business_movefile['file'] );
            wp_update_attachment_metadata( $attach_id, $attach_meta );
        }            
        update_field('business_plan', $attach_id, $ptich_id);
    }
    if ( $financials_movefile && !isset($financials_movefile['error']) ) {
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($financials_movefile['file']),
            'post_mime_type' => $financials_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($financials_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $financials_movefile['file']);      
        if ( !is_wp_error( $attach_id )) {
            $attach_meta = wp_generate_attachment_metadata( $attach_id, $financials_movefile['file'] );
            wp_update_attachment_metadata( $attach_id, $attach_meta );
        }            
        update_field('financials', $attach_id, $ptich_id);
    }
    if ( $slidedeck_movefile && !isset($slidedeck_movefile['error']) ) {
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($slidedeck_movefile['file']),
            'post_mime_type' => $slidedeck_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($slidedeck_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $slidedeck_movefile['file']);      
        if ( !is_wp_error( $attach_id )) {
            $attach_meta = wp_generate_attachment_metadata( $attach_id, $slidedeck_movefile['file'] );
            wp_update_attachment_metadata( $attach_id, $attach_meta );
        }            
        update_field('slide_deck', $attach_id, $ptich_id);
    }
    if ( $executive_movefile && !isset($executive_movefile['error']) ) {
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($executive_movefile['file']),
            'post_mime_type' => $executive_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($executive_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $executive_movefile['file']);      
        if ( !is_wp_error( $attach_id )) {
            $attach_meta = wp_generate_attachment_metadata( $attach_id, $executive_movefile['file'] );
            wp_update_attachment_metadata( $attach_id, $attach_meta );
        }            
        update_field('executive_summary', $attach_id, $ptich_id);
    }
    if ( $additionaldoc_movefile && !isset($additionaldoc_movefile['error']) ) {
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($additionaldoc_movefile['file']),
            'post_mime_type' => $additionaldoc_movefile['type'],
            'post_title' => preg_replace( '/\.[^.]+$/', ”, basename($additionaldoc_movefile['file']) ),
            'post_content' => ”,
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $additionaldoc_movefile['file']);      
        if ( !is_wp_error( $attach_id )) {
            $attach_meta = wp_generate_attachment_metadata( $attach_id, $additionaldoc_movefile['file'] );
            wp_update_attachment_metadata( $attach_id, $attach_meta );
        }            
        update_field('additional_documents', $attach_id, $ptich_id);
    }            
    $url = get_permalink(355);
    wp_redirect( $url );
}
?>    

<?php get_footer(); ?>
