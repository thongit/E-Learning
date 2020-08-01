<!-- Start Sidebar -->
                    <div class="sidebar col-md-3">
                        <aside>
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/'.Auth::user()->anh_dai_dien) }}" class="thumbnail">
                                    </div>
                                    <div class="info">
                                        <span>Giảng viên</span>
                                        <h4>{{ Auth::user()->ho_ten }}</h4>
                                    </div>
                                    <a href="/khoa-hoc/tao-mo-ta-khoa-hoc"><button type="button" class="btn btn-primary btn-lg btn-block">Tạo khóa học mới</button></a>
                                </div>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Danh mục</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <label for=""><a href="{{ route('sua')}}">Thông tin cá nhân</a></label>
                                            
                                        </li>
                                        <li>
                                            <label for=""><a href="/khoa-hoc/ds-khoa-hoc-da-tao">Danh sách khoa học đã tạo</a></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->