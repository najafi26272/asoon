<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">جزییات چت</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Form-->
                    <!--[if BLOCK]><![endif]--><?php if(count($chat->messages)): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $chat->messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <!--[if BLOCK]><![endif]--><?php if($msg->role =="support"): ?>

                            <!--begin::پیام(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::user-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <!--[if BLOCK]><![endif]--><?php if($chat->department == "technical"): ?>
                                                <img alt="Pic" src="<?php echo e(asset("assets/media/avatars/support.jpg")); ?>">
                                            <?php else: ?>
                                                <img alt="Pic" src="<?php echo e(asset("assets/media/avatars/manager.jpg")); ?>">
                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details---->
                                        <div class="ms-3">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">
                                                <?php echo e($chat->department == 'technical' ? 'پشتیبان فنی': 'مدیریت'); ?>

                                            </a>
                                            <span class="text-muted fs-7 mb-1"><?php echo e(\Morilog\Jalali\Jalalian::forge($msg->created_at)->ago()); ?></span>
                                        </div>
                                        <!--end::Details---->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                         data-kt-element="message-text"><?php echo e($msg->message); ?> </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::پیام(in)-->
                        <?php elseif($msg->role =="user"): ?>
                            <!--begin::پیام(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::user-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details---->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">
                                                <?php echo e(\Morilog\Jalali\Jalalian::forge($msg->created_at)->ago()); ?>

                                            </span>
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"><?php echo e($chat->user->name); ?> <?php echo e($chat->user->family); ?></a>
                                        </div>
                                        <!--end::Details---->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                 src="<?php if(\Illuminate\Support\Facades\Auth::user()->avatar): ?> <?php echo e(asset("storage/images/users/avatar")); ?>/<?php echo e(\Illuminate\Support\Facades\Auth::user()->avatar); ?> <?php else: ?> <?php echo e(asset("assets/media/avatars/blank.png")); ?> <?php endif; ?>">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                         data-kt-element="message-text"><?php echo e($msg->message); ?></div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::پیام(out)-->

                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                <?php else: ?>
                    <div class="text-center">
                        <img width="200" src="<?php echo e(asset("assets/img/inbox.png")); ?>">
                        <p class="mt-5" style="color: #499eb1">پیامی یافت نشد.</p>
                    </div>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

        <div class="card-footer pt-4">
            <!--begin::Input-->
            <textarea wire:model="message" class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                      placeholder="نوشتن پیام"></textarea>
                      <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                <?php echo e($message); ?>

                            </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                </div>
                <!--end::Actions-->
                <!--begin::ارسال-->
                <button wire:click="sendMessage()" class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                <!--end::ارسال-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Form-->
    </div>
    <!--begin::Body-->
</div>


<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-chat/chat-details-component.blade.php ENDPATH**/ ?>