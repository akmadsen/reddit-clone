<div class="form-field">
    <label for="{{ $field }}">{{ $label }}:
        <?php if ($isRequired): ?> 
            <span class="required">*</span>
        <?php endif; ?>
    </label>
    <input 
        id="{{ $field }}"
        type="text"
        name="{{ $field }}" 
        value="<?php echo old("$field", $default) ?>" 
        <?php if($isRequired): ?>
            required 
        <?php endif; ?> 
        autofocus>

    <?php if ($error = $errors->first("$field")): ?>
        <p class="text-danger" role="alert">
            <strong><?php echo $error ?></strong>
        </p>
    <?php endif; ?>
</div>