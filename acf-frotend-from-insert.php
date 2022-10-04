<?php /* Template Name: Add Pitch */ ?>
<?php get_header(); $step = $_GET['step'];?>

 
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
                <li><a href="#" title="Privous"><img src="./assets/icons/arrow-right.svg" alt="icon"></a></li>
                <li><a href="#" class="active" title="">Company info</a></li>
                <li><a href="#" title="Next"><img src="./assets/icons/arrow-right.svg" alt="icon"></a></li>
            </ul>
        </div>


<?php $step = $_GET['step']; if(!$step) { ?>        
        <div class="right-pannel">
             <ul class="d-flex justify-content-end back-btn">
                <li><a href="<?php the_permalink(355); ?>" title="Back to dashboard"> &lt; Back to dashboard</a></li>
            </ul>
            <form method="post" class="pitch_form_valiadation" id="company_info"> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Pitch Title</label>
                    <input type="text" name="pitchtitle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Pitch Title" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Website (optional)</label>
                    <input type="text" name="website" class="form-control" id="exampleInputPassword1" placeholder="Website">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Where is the managemet located?</label>
                    <select id="inputState" name="state" class="form-control" required>
                        <option value="">Please Select</option>
                        <option value="Outside India">Outside India</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                    <select id="inputState" name="country" class="form-control" required>
                        <option selected>Please select</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                    <input type="number" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="+91" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Industry 1</label>
                    <select id="inputState" name="industry1" class="form-control" required>
                        <option selected >Please select</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Industry 2 (optional)</label>
                    <select id="inputState" name="industry2" class="form-control">
                        <option selected>Please select</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Stage</label>
                    <select id="inputstage" name="stage" class="form-control" required>
                        <option value="">Please Select</option>
                        <option value="Pre-Startup/R&amp;D">Pre-Startup/R&amp;D</option>
                        <option value="MVP/Finished Product">MVP/Finished Product</option>
                        <option value="Achieving Sales">Achieving Sales</option>
                        <option value="Breaking Even">Breaking Even</option>
                        <option value="Profitable">Profitable</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Idel Investor Role</label>
                    <select id="inputrole" name="role" class="form-control" required>
                        <option value="">Please Select</option>
                        <option value="Investor Role">Investor Role</option>
                        <option value="Silent">Silent</option>
                        <option value="Daily Involvement">Daily Involvement</option>
                        <option value="Weekly Involvement">Weekly Involvement</option>
                        <option value="Monthly Involvement">Monthly Involvement</option>
                        <option value="Any">Any</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">If you did a previous round, how much did you raise?</label>
                    <select id="inputfunds" name="previousfunds" class="form-control" required>
                        <option value="">Please Select</option>
                        <option value="0">0</option>
                        <option value="10,000">10,000</option>
                        <option value="50,000">50,000</option>
                        <option value="1,00,000">1,00,000</option>
                        <option value="2,50,000">2,50,000</option>
                        <option value="5,00,000">5,00,000</option>
                        <option value="10,00,000">10,00,000</option>
                        <option value="15,00,000">15,00,000</option>
                        <option value="20,00,000">20,00,000</option>
                        <option value="25,00,000">25,00,000</option>
                        <option value="30,00,000">30,00,000</option>
                        <option value="45,00,000">45,00,000</option>
                        <option value="50,00,000">50,00,000</option>
                        <option value="60,00,000">60,00,000</option>
                        <option value="70,00,000">70,00,000</option>
                        <option value="80,00,000">80,00,000</option>
                        <option value="90,00,000">90,00,000</option>
                        <option value="1,00,00,000">1,00,00,000</option>
                        <option value="1,25,00,000">1,25,00,000</option>
                        <option value="1,50,00,000">1,50,00,000</option>
                        <option value="1,75,00,000">1,75,00,000</option>
                        <option value="2,00,00,000">2,00,00,000</option>
                        <option value="2,25,00,000">2,25,00,000</option>
                        <option value="2,50,00,000">2,50,00,000</option>
                        <option value="2,75,00,000">2,75,00,000</option>
                        <option value="3,00,00,000">3,00,00,000</option>
                        <option value="3,50,00,000">3,50,00,000</option>
                        <option value="4,00,00,000">4,00,00,000</option>
                        <option value="4,50,00,000">4,50,00,000</option>
                        <option value="5,00,00,000">5,00,00,000</option>
                        <option value="6,00,00,000">6,00,00,000</option>
                        <option value="7,00,00,000">7,00,00,000</option>
                        <option value="8,00,00,000">8,00,00,000</option>
                        <option value="9,00,00,000">9,00,00,000</option>
                        <option value="10,00,00,000">10,00,00,000</option>
                        <option value="15,00,00,000">15,00,00,000</option>
                        <option value="20,00,00,000">20,00,00,000</option>
                        <option value="25,00,00,000">25,00,00,000</option>
                        <option value="30,00,00,000">30,00,00,000</option>
                        <option value="35,00,00,000">35,00,00,000</option>
                        <option value="40,00,00,000">40,00,00,000</option>
                        <option value="45,00,00,000">45,00,00,000</option>
                        <option value="50,00,00,000">50,00,00,000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">How much are you raising in total?</label>
                    <select id="inputrarisningintotal" name="rarisningintotal" class="form-control" required>
                        <option value="">Please Select</option>    
                        <option value="0">0</option>
                        <option value="10,000">10,000</option>
                        <option value="50,000">50,000</option>
                        <option value="1,00,000">1,00,000</option>
                        <option value="2,50,000">2,50,000</option>
                        <option value="5,00,000">5,00,000</option>
                        <option value="10,00,000">10,00,000</option>
                        <option value="15,00,000">15,00,000</option>
                        <option value="20,00,000">20,00,000</option>
                        <option value="25,00,000">25,00,000</option>
                        <option value="30,00,000">30,00,000</option>
                        <option value="45,00,000">45,00,000</option>
                        <option value="50,00,000">50,00,000</option>
                        <option value="60,00,000">60,00,000</option>
                        <option value="70,00,000">70,00,000</option>
                        <option value="80,00,000">80,00,000</option>
                        <option value="90,00,000">90,00,000</option>
                        <option value="1,00,00,000">1,00,00,000</option>
                        <option value="1,25,00,000">1,25,00,000</option>
                        <option value="1,50,00,000">1,50,00,000</option>
                        <option value="1,75,00,000">1,75,00,000</option>
                        <option value="2,00,00,000">2,00,00,000</option>
                        <option value="2,25,00,000">2,25,00,000</option>
                        <option value="2,50,00,000">2,50,00,000</option>
                        <option value="2,75,00,000">2,75,00,000</option>
                        <option value="3,00,00,000">3,00,00,000</option>
                        <option value="3,50,00,000">3,50,00,000</option>
                        <option value="4,00,00,000">4,00,00,000</option>
                        <option value="4,50,00,000">4,50,00,000</option>
                        <option value="5,00,00,000">5,00,00,000</option>
                        <option value="6,00,00,000">6,00,00,000</option>
                        <option value="7,00,00,000">7,00,00,000</option>
                        <option value="8,00,00,000">8,00,00,000</option>
                        <option value="9,00,00,000">9,00,00,000</option>
                        <option value="10,00,00,000">10,00,00,000</option>
                        <option value="15,00,00,000">15,00,00,000</option>
                        <option value="20,00,00,000">20,00,00,000</option>
                        <option value="25,00,00,000">25,00,00,000</option>
                        <option value="30,00,00,000">30,00,00,000</option>
                        <option value="35,00,00,000">35,00,00,000</option>
                        <option value="40,00,00,000">40,00,00,000</option>
                        <option value="45,00,00,000">45,00,00,000</option>
                        <option value="50,00,00,000">50,00,00,000</option>
                                        </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">How much of this total have you raised?</label>
                    <select id="inputtotalraised" name="totalraised" class="form-control" required>
                        <option value="">Please Select</option>    
                        <option value="0">0</option>
                        <option value="10,000">10,000</option>
                        <option value="50,000">50,000</option>
                        <option value="1,00,000">1,00,000</option>
                        <option value="2,50,000">2,50,000</option>
                        <option value="5,00,000">5,00,000</option>
                        <option value="10,00,000">10,00,000</option>
                        <option value="15,00,000">15,00,000</option>
                        <option value="20,00,000">20,00,000</option>
                        <option value="25,00,000">25,00,000</option>
                        <option value="30,00,000">30,00,000</option>
                        <option value="45,00,000">45,00,000</option>
                        <option value="50,00,000">50,00,000</option>
                        <option value="60,00,000">60,00,000</option>
                        <option value="70,00,000">70,00,000</option>
                        <option value="80,00,000">80,00,000</option>
                        <option value="90,00,000">90,00,000</option>
                        <option value="1,00,00,000">1,00,00,000</option>
                        <option value="1,25,00,000">1,25,00,000</option>
                        <option value="1,50,00,000">1,50,00,000</option>
                        <option value="1,75,00,000">1,75,00,000</option>
                        <option value="2,00,00,000">2,00,00,000</option>
                        <option value="2,25,00,000">2,25,00,000</option>
                        <option value="2,50,00,000">2,50,00,000</option>
                        <option value="2,75,00,000">2,75,00,000</option>
                        <option value="3,00,00,000">3,00,00,000</option>
                        <option value="3,50,00,000">3,50,00,000</option>
                        <option value="4,00,00,000">4,00,00,000</option>
                        <option value="4,50,00,000">4,50,00,000</option>
                        <option value="5,00,00,000">5,00,00,000</option>
                        <option value="6,00,00,000">6,00,00,000</option>
                        <option value="7,00,00,000">7,00,00,000</option>
                        <option value="8,00,00,000">8,00,00,000</option>
                        <option value="9,00,00,000">9,00,00,000</option>
                        <option value="10,00,00,000">10,00,00,000</option>
                        <option value="15,00,00,000">15,00,00,000</option>
                        <option value="20,00,00,000">20,00,00,000</option>
                        <option value="25,00,00,000">25,00,00,000</option>
                        <option value="30,00,00,000">30,00,00,000</option>
                        <option value="35,00,00,000">35,00,00,000</option>
                        <option value="40,00,00,000">40,00,00,000</option>
                        <option value="45,00,00,000">45,00,00,000</option>
                        <option value="50,00,00,000">50,00,00,000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">What is the minimum investment per investor?</label>
                    <select id="inputmininvest" name="mininvest" class="form-control" required>
                        <option value="">Please Select</option>    
                        <option value="0">0</option>
                        <option value="10,000">10,000</option>
                        <option value="50,000">50,000</option>
                        <option value="1,00,000">1,00,000</option>
                        <option value="2,50,000">2,50,000</option>
                        <option value="5,00,000">5,00,000</option>
                        <option value="10,00,000">10,00,000</option>
                        <option value="15,00,000">15,00,000</option>
                        <option value="20,00,000">20,00,000</option>
                        <option value="25,00,000">25,00,000</option>
                        <option value="30,00,000">30,00,000</option>
                        <option value="45,00,000">45,00,000</option>
                        <option value="50,00,000">50,00,000</option>
                        <option value="60,00,000">60,00,000</option>
                        <option value="70,00,000">70,00,000</option>
                        <option value="80,00,000">80,00,000</option>
                        <option value="90,00,000">90,00,000</option>
                        <option value="1,00,00,000">1,00,00,000</option>
                        <option value="1,25,00,000">1,25,00,000</option>
                        <option value="1,50,00,000">1,50,00,000</option>
                        <option value="1,75,00,000">1,75,00,000</option>
                        <option value="2,00,00,000">2,00,00,000</option>
                        <option value="2,25,00,000">2,25,00,000</option>
                        <option value="2,50,00,000">2,50,00,000</option>
                        <option value="2,75,00,000">2,75,00,000</option>
                        <option value="3,00,00,000">3,00,00,000</option>
                        <option value="3,50,00,000">3,50,00,000</option>
                        <option value="4,00,00,000">4,00,00,000</option>
                        <option value="4,50,00,000">4,50,00,000</option>
                        <option value="5,00,00,000">5,00,00,000</option>
                        <option value="6,00,00,000">6,00,00,000</option>
                        <option value="7,00,00,000">7,00,00,000</option>
                        <option value="8,00,00,000">8,00,00,000</option>
                        <option value="9,00,00,000">9,00,00,000</option>
                        <option value="10,00,00,000">10,00,00,000</option>
                        <option value="15,00,00,000">15,00,00,000</option>
                        <option value="20,00,00,000">20,00,00,000</option>
                        <option value="25,00,00,000">25,00,00,000</option>
                        <option value="30,00,00,000">30,00,00,000</option>
                        <option value="35,00,00,000">35,00,00,000</option>
                        <option value="40,00,00,000">40,00,00,000</option>
                        <option value="45,00,00,000">45,00,00,000</option>
                        <option value="50,00,00,000">50,00,00,000</option>
                    </select>
                </div>
                <div class="inner-banner-btn d-flex justify-content-center">
                    <button type="submit" name="company_submit" class="primary-btn pitch_form_submit" title="Save & Continue">Save & Continue</button>
                </div>
               
            </form>
        </div>
<?php } ?>    


<?php $step = $_GET['step']; if($step=="pitch-deal") { ?>         
        <div class="right-pannel">
            <ul class="d-flex justify-content-end back-btn">
                <li><a href="#" title="Back to dashboard"> &lt; Back to dashboard</a></li>
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
                    <textarea name="summary" id="" rows="3" placeholder="Write here" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">The
                        Business<span>750 characters remaining</span></label>
                    <textarea name="business" id="" rows="3" placeholder="Write here" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-flex justify-content-between align-items-center">The Market
                        <span>750 characters remaining</span></label>
                    <textarea name="market" id="" rows="3" placeholder="Write here" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Progress/Proof<span>750 characters
                            remaining</span></label>
                    <textarea name="progressproof" id="" rows="3" placeholder="Write here" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Objectives/Future<span>750 characters
                            remaining</span></label>
                    <textarea name="future" id="" rows="3" placeholder="Write here" required></textarea>
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">Highlights</label>
                </div>

                <ul class="highlight_box">
                    <li>
                        <div class="form-group">
                            <label for="exampleInputEmail1"
                                class="d-flex justify-content-end align-items-center"><span>750 characters
                                    remaining</span></label>
                            <textarea name="highlight[]" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                    </li>
                </ul>
                <button type="submit" class="add-section-btn add_new_highligt" title="Add New Section">Add New Highlights</button>
                <input type="hidden" class="periods" name="periods" value=""> 



                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Loan<span>750 charactersremaining. </span></label>
                    <textarea name="loan" name="loan" id="" rows="3" placeholder="Write here" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"
                        class="d-flex justify-content-between align-items-center">Tags<span>Enter 5 to 10 relevant keywords. </span></label>
                    <textarea name="tags" id="" rows="3" placeholder="Write here" required></textarea>
                </div>

                <div class="inner-banner-btn d-flex justify-content-center">
                    <button type="submit" name="pitchdeal_submit" class="primary-btn pitch_form_submit" title="Save & Continue">Save & Continue</button>
                </div>

            </form>
        </div>
<?php } ?>  


<?php $step = $_GET['step']; if($step=="team") { ?>        
        <div class="right-pannel">
        <ul class="d-flex justify-content-end back-btn">
                <li><a href="#" title="Back to dashboard"> &lt; Back to dashboard</a></li>
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
                    <textarea name="team_summary" id="exampleFormControlTextarea1" rows="3" placeholder="Write here" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Team Members</label>
                   <div class="repeat_team_member"> 
                    <div class="team-member">
                        <div class="upload-photo">
                            <div class="imagePreview"><img id="previewImg" class="previewImg" src="" alt="Placeholder"></div>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload Photo
                                <input name="team_photo[]" type="file" class="uploadFile img image_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" onchange="preview_image(event)" required>
                            </label>
                        </div>

                        <div class="form-group">
                            <input type="text" name="team_name[]" class="form-control" id=""
                                placeholder="Name" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="team_linkdine[]" class="form-control" id="" placeholder="LinkedIn" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="team_position[]" class="form-control" id="" placeholder="Position" required>
                        </div>

                        <div class="form-group">
                            <textarea name="team_bio[]" id="" rows="3" placeholder="Bio" required></textarea>
                        </div>

                        <!-- <div class="save-cancle-btn d-flex justify-content-center align-items-center">
                            <a href="#" class="cancle-btn" title="Cancel">Cancel</a>
                            <a href="#" class="save-btn" title="Save">Save</a>
                        </div> -->
        

                    </div>
                  <script>
                      function preview_image(event) 
  {
   var reader = new FileReader();
   reader.onload = function()
   {
    var output = document.getElementById('previewImg');
    output.src = reader.result;
   }
   reader.readAsDataURL(event.target.files[0]);
  }

                  </script>  
                    
                          
                        <button type="button" class="add-section-btn add_repeter"  title="Add New Section">Add New Section</button>
                        <input type="hidden" class="periods" name="periods" value="">  
                </div>

                

                <div class="inner-banner-btn d-flex justify-content-center">
                     <button type="submit" name="team_submit" class="primary-btn pitch_form_submit" title="Save & Continue">Save & Continue</button>
                </div>
            </form>

        </div>
<?php } ?>   


<?php $step = $_GET['step']; if($step=="images-video") { ?>         
        <div class="right-pannel">
         <ul class="d-flex justify-content-end back-btn">
                <li><a href="#" title="Back to dashboard"> &lt; Back to dashboard</a></li>
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
                            <div class="image_box"><img class="previewImg" src="/examples/images/transparent.png" alt="Placeholder"></div>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload Logo
                                <input type="file" name="project_logo" class="uploadFile img image_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept="image/png, image/gif, image/jpeg, image/svg" required />
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
                            <div class="image_box"><img class="previewImg" src="/examples/images/transparent.png" alt="Placeholder"></div>    
                            <label class="add-section-btn" title="Upload Photo">
                                Add Image
                                <input type="file" name="banner" class="uploadFile img image_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept="image/png, image/gif, image/jpeg, image/svg" required />
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
                            <div class="image_box"><img class="previewImg" src="" alt="Placeholder"></div>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload Images
                                <input type="file" name="project_gallery" class="uploadFile img image_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept="image/png, image/gif, image/jpeg, image/svg" required />
                            </label>
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
                        placeholder="Video link" required>
                        <span>Insert only the video link</span>
                    </div>
                    
                </div>


                <div class="inner-banner-btn d-flex justify-content-center">
                    <button name="imgvideo_submit" type="submit" class="primary-btn pitch_form_submit" title="Save & Continue">Save & Continue</button>
                </div>
            </form>    
        </div>
<?php } ?>


<?php $step = $_GET['step']; if($step=="documents") { ?>         
        <div class="right-pannel">
            <ul class="d-flex justify-content-end back-btn">
                <li><a href="#" title="Back to dashboard"> &lt; Back to dashboard</a></li>
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
                            <p class="file_name"></p>
                        <label class="add-section-btn" title="Upload Photo">
                            Upload File
                            <input type="file" class="uploadFile img file_type" name="business_plan" 
                                style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
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
                        <p class="file_name"></p>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload File
                                <input type="file" name="financials" class="uploadFile img file_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
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
                            <p class="file_name"></p>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload File
                                <input type="file" name="slidedeck" class="uploadFile img file_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
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
                            <p class="file_name"></p>
                        <label class="add-section-btn" title="Upload Photo">
                            Upload File
                            <input type="file" name="executive" class="uploadFile img file_type" value="Upload Photo"
                                style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
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
                                <p class="file_name"></p>
                            <label class="add-section-btn" title="Upload Photo">
                                Upload File
                                <input type="file" name="additionaldoc" class="uploadFile img file_type" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
                            </label>
                        </div>
                        <span>
                            Files: Word, Excel, PowerPoint & PDF. Max file size: 10MB
                        </span>
                    </div>
                </div>

                <div class="inner-banner-btn d-flex justify-content-center">
                    <button name="document_submit" type="submit" class="primary-btn pitch_form_submit" title="Save & Continue">Save & Continue</button>
                </div>
                </form>
        </div>
<?php } ?>  


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
    $post_data = array(
        'post_title' => $pitch_title,
        'post_type' => 'project',
        'post_status' => 'pending'
    );
    $post_id = wp_insert_post( $post_data );
    $url = site_url()."/add-pitch/?step=pitch-deal&id=".$post_id; 
    update_post_meta($post_id,'pitch_title',$pitch_title);
    update_post_meta($post_id,'website',$website);
    update_post_meta($post_id,'where_is_the_managemet_located',$state);
    update_post_meta($post_id,'country',$country);
    update_post_meta($post_id,'mobile_number',$mobile);
    update_post_meta($post_id,'industry_1',$industry1);
    update_post_meta($post_id,'industry_2',$industry2);
    update_post_meta($post_id,'stage',$stage);
    update_post_meta($post_id,'ideal_investor_role_',$role);
    update_post_meta($post_id,'if_you_did_a_previous_round_how_much_did_you_raise',$previousfunds);
    update_post_meta($post_id,'how_much_are_you_raising_in_total',$rarisningintotal);
    update_post_meta($post_id,'how_much_of_this_total_have_you_raised',$totalraised);
    update_post_meta($post_id,'what_is_the_minimum_investment_per_investor',$mininvest);

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
    $post_id = $_GET["id"];  
    $url = site_url()."/add-pitch/?step=team&id=".$post_id; 
    for ($x = 0; $x <= $periods; $x++) {
        echo $highlights[$x];
        $rows[] = array(
            'highlight_text' => $highlights[$x],
        );                
    }
    foreach($rows as $row){
        add_row('highlights', $row, $post_id);

    }  
    update_post_meta($post_id,'short_summary',$summary);
    update_post_meta($post_id,'the_business',$business);
    update_post_meta($post_id,'the_market',$market);
    update_post_meta($post_id,'progressproof',$progressproof);
    update_post_meta($post_id,'objectivesfuture',$future);
    update_post_meta($post_id,'loan',$tags);
    update_post_meta($post_id,'tags',$tags);

    wp_redirect( $url );

}
if(isset($_POST["team_submit"]))
{

    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );            
    
    $team_summary = $_POST['team_summary'];
    $team_photo = $_FILES['team_photo'];
    $team_name = $_POST['team_name'];
    $team_linkdine = $_POST['team_linkdine'];
    $team_position = $_POST['team_position'];
    $team_bio = $_POST['team_bio'];
    $periods = $_POST['periods'];
    $post_id = $_GET["id"];  
    $url = site_url()."/add-pitch/?step=images-video&id=".$post_id; 

    for ($x = 0; $x <= $periods; $x++) {
        
        $photo_group=[];
        foreach($team_photo as $k => $test){
            $photo_group[$k]=$test[$x];
        }               
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
        if ( !is_wp_error( $attach_id[$x] )) {
            $attach_meta[$x] = wp_generate_attachment_metadata( $attach_id[$x], $team_photo_movefile['file'] );
            wp_update_attachment_metadata( $attach_id[$x], $attach_meta[$x] );
        }       
        $rows[] = array(
            'member_photo' => $attach_id[$x],
            'member_name' => $team_name[$x],
            'member_linkedin' => $team_linkdine[$x],
            'member_position' => $team_position[$x],
            'member_bio' => $team_bio[$x],
        );
    }

    foreach($rows as $row){
        add_row('team_members', $row, $post_id);

    }
    
    update_post_meta($post_id,'team_short_summary',$team_summary);

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
    $post_id = $_GET["id"];  
    $url = site_url()."/add-pitch/?step=documents&id=".$post_id; 


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
        update_field('project_logo', $attach_id, $post_id);
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
        update_field('banner_image', $attach_id, $post_id);
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
        update_field('project_gallery', $attach_id, $post_id);
    }
            
    update_post_meta($post_id,'project_video_link',$video_link);    

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
    $post_id = $_GET["id"];  
    $url = site_url()."/add-pitch/?step=team&id=".$post_id; 

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
        update_field('business_plan', $attach_id, $post_id);
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
        update_field('financials', $attach_id, $post_id);
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
        update_field('slide_deck', $attach_id, $post_id);
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
        update_field('executive_summary', $attach_id, $post_id);
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
        update_field('additional_documents', $attach_id, $post_id);
    }            
    
    wp_redirect( $url );
}
?>    

<?php get_footer(); ?>
