<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
               <div class="row">
                  <div class="col-md-6">
                     <h4>MESSAGES</h4>
                     <!-- First Button -->
                     <button class="btn btn-light mb-3 w-100" onclick="toggleConversation('conversation1', 'Bot 1')">
                        <div class="row g-0">
                           <div class="col-5 col-sm-4">
                              <img src="https://w7.pngwing.com/pngs/529/418/png-transparent-computer-icons-internet-bot-eyes-miscellaneous-people-sticker-thumbnail.png" class="img-fluid w-100" alt="card-horizontal-image">
                           </div>
                           <div class="col-7 col-sm-8">
                              <div class="card-body">
                                 <h5 class="card-title">Bot 1</h5>
                                 <p class="card-text"><small class="text-muted">Messages 3 mins ago</small></p>
                              </div>
                           </div>
                        </div>
                     </button>
                     <!-- Second Button -->
                     <button class="btn btn-light mb-3 w-100" onclick="toggleConversation('conversation2', 'Bot 2')">
                        <div class="row g-0">
                           <div class="col-5 col-sm-4">
                              <img src="https://w7.pngwing.com/pngs/529/418/png-transparent-computer-icons-internet-bot-eyes-miscellaneous-people-sticker-thumbnail.png" class="img-fluid w-100" alt="card-horizontal-image">
                           </div>
                           <div class="col-7 col-sm-8">
                              <div class="card-body">
                                 <h5 class="card-title">Bot 2</h5>
                                 <p class="card-text"><small class="text-muted">Messages 3 mins ago</small></p>
                              </div>
                           </div>
                        </div>
                     </button>
                  </div>
                  <div class="col-md-6">
                     <div class="conversation" id="conversation1" style="display:none;">
                        <h3 id="conversationHeader">Conversation with Bot 1</h3>
                        <!-- Messages for Bot 1 -->
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Bot 1</h5>
                              <p class="card-text">Message 1</p>
                              <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                              <!-- Reply Form for Message 1 -->
                              <form class="d-flex" action="#">
                                 <input class="form-control me-2" type="text" placeholder="Your reply">
                                 <button class="btn btn-primary" type="submit">Reply</button>
                              </form>
                           </div>
                        </div>
                        <!-- More Messages for Bot 1 -->
                     </div>
                     <div class="conversation" id="conversation2" style="display:none;">
                        <h3 id="conversationHeader">Conversation with Bot 2</h3>
                        <!-- Messages for Bot 2 -->
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Bot 2</h5>
                              <p class="card-text">Message 2</p>
                              <p class="card-text"><small class="text-muted">5 mins ago</small></p>
                              <!-- Reply Form for Message 2 -->
                              <form class="d-flex" action="#">
                                 <input class="form-control me-2" type="text" placeholder="Your reply">
                                 <button class="btn btn-primary" type="submit">Reply</button>
                              </form>
                           </div>
                        </div>
                        <!-- More Messages for Bot 2 -->
                     </div>
                  </div>
               </div>
            </div>