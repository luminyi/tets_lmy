<div class="form-group">
    <label for="nameChange" class="col-md-2 control-label">活动名称</label>
    <div class="col-md-9">
        <input type="text" class="form-control" name="nameChange" id="nameChange" value=""
               autofocus>
    </div>
</div>

<div class="form-group">
    <label for="teacherChange" class="col-md-2 control-label">
        主讲教师
    </label>
    <div class="col-md-4">
        <input type="text" class="form-control" name="teacherChange" id="teacherChange" value="">
    </div>

    <label for="placeChange" class="col-md-2  control-label">
        活动地点
    </label>
    <div class="col-md-4">
        <input type="text" class="form-control" name="placeChange" id="placeChange" value="">
    </div>

</div>

<div class="form-group">
    <label for="start_timeChange" class="col-md-2 control-label">
        &nbsp;&nbsp;活动开始时间
    </label>
    <div class="col-md-4">
        <input type="text" class="form-control" name="start_timeChange" id="start_timeChange" value="">
    </div>

    <label for="end_timeChange" class="col-md-2 control-label">
        &nbsp;&nbsp;活动结束时间
    </label>
    <div class="col-md-4 ">
        <input type="text" class="form-control" name="end_timeChange" id="end_timeChange" value="">
    </div>
</div>

<div class="form-group">
    <label for="apply_start_timeChange" class="col-md-2 control-label">
        &nbsp;&nbsp;报名开始时间
    </label>
    <div class="col-md-4 ">
        <input type="text" class="form-control" name="apply_start_timeChange" id="apply_start_timeChange" value="">
    </div>

    <label for="apply_end_timeChange" class="col-md-2 control-label">
        &nbsp;&nbsp;报名结束时间
    </label>
    <div class="col-md-4 ">
        <input type="text" class="form-control" name="apply_end_timeChange" id="apply_end_timeChange" value="">
    </div>

</div>
<div class="form-group">
    <label for="termChange" class="col-md-2 control-label">
        活动学期
    </label>
    <div class="col-md-4">
        <input type="text" class="form-control" name="termChange" id="termChange" value="">
    </div>


    <label for="all_numChange" class="col-md-2 control-label">
       活动人数
    </label>
    <div class="col-md-4 ">
        <input type="text" class="form-control" name="all_numChange" id="all_numChange" value="">
    </div>
</div>

<div class="form-group">
    <label for="informationChange" class="col-md-2 control-label">
        活动详情
    </label>
    <div class="col-md-9">
        <textarea class="form-control" id="informationChange" name="informationChange">
        </textarea>
    </div>
</div>


<div class="form-group">
    <label for="apply_stateChange" class="col-md-2 control-label">
        报名状态
    </label>
    <div class="col-md-9">
        <label class="radio-inline col-md-3">
            <input type="radio" name="apply_stateChange"
                   checked="checked"
                   value="未开始">
            未开始
        </label>
        <label class="radio-inline col-md-3">
            <input type="radio" name="apply_stateChange"
                   {{--checked="checked"--}}
                   value="正在进行">
            正在进行
        </label>
        <label class="radio-inline col-md-3">
            <input type="radio" name="apply_stateChange"
                   {{--checked="checked"--}}
                   value="已结束">
            报名结束
        </label>
    </div>
</div>