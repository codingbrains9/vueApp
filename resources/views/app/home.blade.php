@extends('layouts.app')
@section('content')
<!-- Job Listing -->
<div class="alice-bg section-padding-bottom">
  <div class="container">
    <div class="row no-gutters">
      <div class="col">
        <div class="job-listing-container">
          <div class="filtered-job-listing-wrapper">
            <div class="job-view-controller-wrapper">
              <div class="job-view-controller">
                <div class="controller list active">
                  <i data-feather="menu"></i>
                </div>
                <div class="controller grid">
                  <i data-feather="grid"></i>
                </div>
                <div class="job-view-filter">
                  <select class="selectpicker">
                    <option value="" selected>Most Recent</option>
                    <option value="california">Top Rated</option>
                    <option value="las-vegas">Most Popular</option>
                  </select>
                </div>
              </div>
              <div class="showing-number">
                <span>Showing 1–12 of 28 Jobs</span>
              </div>
            </div>
            <div class="job-filter-result">
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                      <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div> 
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                      <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">UI Designer</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                      <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Land Development Marketer</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington</a></span>
                      <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">UI Designer</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                      <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Land Development Marketer</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington</a></span>
                      <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Designer Required</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                      <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Project Manager</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                      <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Las Vegas</a></span>
                      <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                      <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Designer Required</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                      <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="#">
                    <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="job-details.html">Project Manager</a></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                      <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                      <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                    </div>
                  </div>
                  <div class="more">
                    <div class="buttons">
                      <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                      <a href="#" class="favourite"><i data-feather="heart"></i></a>
                    </div>
                    <p class="deadline">Deadline: Oct 31,  2019</p>
                  </div>
                </div>
              </div>
              <div class="apply-popup">
                <div class="modal fade" id="apply-popup-id" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"><i data-feather="edit"></i>APPLY FOR THIS JOB</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="#">
                          <div class="form-group">
                            <input type="text" placeholder="Full Name" class="form-control">
                          </div>
                          <div class="form-group">
                            <input type="email" placeholder="Email Address" class="form-control">
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" placeholder="Message"></textarea>
                          </div>
                          <div class="form-group file-input-wrap">
                            <label for="up-cv">
                              <input id="up-cv" type="file">
                              <i data-feather="upload-cloud"></i>
                              <span>Upload your resume <span>(pdf,zip,doc,docx)</span></span>
                            </label>
                          </div>
                          <div class="more-option">
                            <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                            <label for="radio-4">
                              <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
                            </label>
                          </div>
                          <button class="button primary-bg btn-block">Apply Now</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pagination-list text-center">
              <nav class="navigation pagination">
                <div class="nav-links">
                  <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                  <a class="page-numbers" href="#">1</a>
                  <span aria-current="page" class="page-numbers current">2</span>
                  <a class="page-numbers" href="#">3</a>
                  <a class="page-numbers" href="#">4</a>
                  <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                </div>
              </nav>                
            </div>
          </div>
          <div class="job-filter-wrapper">
            <div class="selected-options same-pad">
              <div class="selection-title">
                <h4>You Selected</h4>
                <a href="#">Clear All</a>
              </div>
              <ul class="filtered-options">
              </ul>
            </div>
            <div class="job-filter-dropdown same-pad category">
              <select class="selectpicker">
                <option value="" selected>Category</option>
                <option value="california">Accounting / Finance</option>
                <option value="california">Education</option>
                <option value="california">Design &amp; Creative</option>
                <option value="california">Health Care</option>
                <option value="california">Engineer &amp; Architects</option>
                <option value="california">Marketing &amp; Sales</option>
                <option value="california">Garments / Textile</option>
                <option value="california">Customer Support</option>
                <option value="california">Digital Media</option>
                <option value="california">Telecommunication</option>
              </select>
            </div>
            <div class="job-filter-dropdown same-pad location">
              <select class="selectpicker">
                <option value="" selected>Location</option>
                <option value="california">Chicago</option>
                <option value="california">New York City</option>
                <option value="california">San Francisco</option>
                <option value="california">Washington</option>
                <option value="california">Boston</option>
                <option value="california">Los Angeles</option>
                <option value="california">Seattle</option>
                <option value="california">Las Vegas</option>
                <option value="california">San Diego</option>
              </select>
            </div>
            <div data-id="job-type" class="job-filter job-type same-pad">
              <h4 class="option-title">Job Type</h4>
              <ul>
                <li class="full-time"><i data-feather="clock"></i><a href="#" data-attr="Full Time">Full Time</a></li>
                <li class="part-time"><i data-feather="clock"></i><a href="#" data-attr="Part Time">Part Time</a></li>
                <li class="freelance"><i data-feather="clock"></i><a href="#" data-attr="Freelance">Freelance</a></li>
                <li class="temporary"><i data-feather="clock"></i><a href="#" data-attr="Temporary">Temporary</a></li>
              </ul>
            </div>
            <div data-id="experience" class="job-filter experience same-pad">
              <h4 class="option-title">Experience</h4>
              <ul>
                <li><a href="#" data-attr="Fresh">Fresh</a></li>
                <li><a href="#" data-attr="Less than 1 year">Less than 1 year</a></li>
                <li><a href="#" data-attr="2 Year">2 Year</a></li>
                <li><a href="#" data-attr="3 Year">3 Year</a></li>
                <li><a href="#" data-attr="4 Year">4 Year</a></li>
                <li><a href="#" data-attr="5 Year">5 Year</a></li>
                <li><a href="#" data-attr="Avobe 5 Years">Avobe 5 Years</a></li>
              </ul>
            </div>
            <div class="job-filter same-pad">
              <h4 class="option-title">Salary Range</h4>
              <div class="price-range-slider">
                <div class="nstSlider" data-range_min="0" data-range_max="10000" 
                 data-cur_min="0"    data-cur_max="6130">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                  <div class="grip-label">
                    <span class="leftLabel"></span>
                    <span class="rightLabel"></span>
                  </div>
                </div>
              </div>
            </div>
            <div data-id="post" class="job-filter post same-pad">
              <h4 class="option-title">Date Posted</h4>
              <ul>
                <li><a href="#" data-attr="Last hour">Last hour</a></li>
                <li><a href="#" data-attr="Last 24 hour">Last 24 hour</a></li>
                <li><a href="#" data-attr="Last 7 days">Last 7 days</a></li>
                <li><a href="#" data-attr="Last 14 days">Last 14 days</a></li>
                <li><a href="#" data-attr="Last 30 days">Last 30 days</a></li>
              </ul>
            </div>
            <div data-id="gender" class="job-filter same-pad gender">
              <h4 class="option-title">Gender</h4>
              <ul>
                <li><a href="#" data-attr="Male">Male</a></li>
                <li><a href="#" data-attr="Female">Female</a></li>
              </ul>
            </div>
            <div data-id="qualification" class="job-filter qualification same-pad">
              <h4 class="option-title">Qualification</h4>
              <ul>
                <li><a href="#" data-attr="Matriculation">Matriculation</a></li>
                <li><a href="#" data-attr="Intermidiate">Intermidiate</a></li>
                <li><a href="#" data-attr="Gradute">Gradute</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Job Listing End -->

<!-- Call to Action -->
<div class="call-to-action-bg padding-top-90 padding-bottom-90">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="call-to-action-2">
          <div class="call-to-action-content">
            <h2>For Find Your Dream Job or Candidate</h2>
            <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
          </div>
          <div class="call-to-action-button">
            <a href="add-resume.html" class="button">Add Resume</a>
            <span>Or</span>
            <a href="post-job.html" class="button">Post A Job</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Call to Action End -->
@stop