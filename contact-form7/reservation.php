<div class="p-reservation__form p-reservation-form">
  <h2 class="p-reservation-form__title c-section-title">予約フォーム</h2>
  <div class="p-contact-contents__form c-form">
    <dl class="c-form__item">
      <dt class="c-form__term">お名前<span class="c-form__required">必須</span></dt>
      <dd class="c-form__desc">
        [text* your-name class:c-form__input placeholder "山田 太郎"]
      </dd>
    </dl>
    <dl class="c-form__item">
      <dt class="c-form__term">フリガナ<span class="c-form__required">必須</span></dt>
      <dd class="c-form__desc">
        [text* your-name class:c-form__input placeholder "ヤマダ タロウ"]
      </dd>
    </dl>
    <dl class="c-form__item">
      <dt class="c-form__term">電話番号<span class="c-form__required">必須</span></dt>
      <dd class="c-form__desc">
        [tel* your-tel class:c-form__input placeholder "000-0000-0000"]
      </dd>
    </dl>
    <dl class="c-form__item">
      <dt class="c-form__term">メールアドレス<span class="c-form__required">必須</span></dt>
      <dd class="c-form__desc">
        [tel* your-email class:c-form__input placeholder "xxx@example.com"]
      </dd>
    </dl>
    <dl class="c-form__item">
      <dt class="c-form__term">初診/再診<span class="c-form__required">必須</span></dt>
      <dd class="c-form__desc">
        <label class="c-radio" for="radio-1">
          <input type="radio" name="radio1" value="radio1" id="radio-1" class="c-radio__input u-visually-hidden">
          <span class="c-radio__label">初診</span>
        </label>
        <label class="c-radio" for="radio-2">
          <input type="radio" name="radio1" value="radio2" id="radio-2" class="c-radio__input u-visually-hidden">
          <span class="c-radio__label">再診</span>
        </label>
      </dd>
    </dl>
    <dl class="c-form__item">
      <dt class="c-form__term">診療内容<span class="c-form__required">必須</span><span class="c-form__explain">※(複数選択可)</span></dt>
      <dd class="c-form__desc">
        <label class="c-checkbox" for="checkbox-1">
          <input type="checkbox" name="checkbox[data][]" value="checkbox1" id="checkbox-1" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">虫歯</span>
        </label>
        <label class="c-checkbox" for="checkbox-2">
          <input type="checkbox" name="checkbox[data][]" value="checkbox2" id="checkbox-2" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">被せ物がとれた</span>
        </label>
        <label class="c-checkbox" for="checkbox-3">
          <input type="checkbox" name="checkbox[data][]" value="checkbox3" id="checkbox-3" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">矯正歯科</span>
        </label>
        <label class="c-checkbox" for="checkbox-4">
          <input type="checkbox" name="checkbox[data][]" value="checkbox4" id="checkbox-4" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">咬み合わせ</span>
        </label>
        <label class="c-checkbox" for="checkbox-5">
          <input type="checkbox" name="checkbox[data][]" value="checkbox5" id="checkbox-5" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">歯周病</span>
        </label>
        <label class="c-checkbox" for="checkbox-6">
          <input type="checkbox" name="checkbox[data][]" value="checkbox6" id="checkbox-6" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">小児歯科</span>
        </label>
        <label class="c-checkbox" for="checkbox-7">
          <input type="checkbox" name="checkbox[data][]" value="checkbox7" id="checkbox-7" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">入れ歯</span>
        </label>
        <label class="c-checkbox" for="checkbox-8">
          <input type="checkbox" name="checkbox[data][]" value="checkbox8" id="checkbox-8" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">インプラント</span>
        </label>
        <label class="c-checkbox" for="checkbox-9">
          <input type="checkbox" name="checkbox[data][]" value="checkbox9" id="checkbox-9" class="c-checkbox__input u-visually-hidden">
          <span class="c-checkbox__label">その他</span>
        </label>
      </dd>
    </dl>
    <dl class="c-form__item">
      <dt class="c-form__term">ご連絡方法<span class="c-form__required">必須</span></dt>
      <dd class="c-form__desc">
        <select name="" class="c-select c-form__input" aria-label="カスタムプルダウン">
          <option value="">選択してください</option>
          <option value="mail">メール</option>
          <option value="tel">電話</option>
          <option value="line">LINE</option>
        </select>
      </dd>
    </dl>
    <dl class="c-form__item">
      <dt class="c-form__term">希望日</dt>
      <dd class="c-form__desc c-date">
        <input type="date" name="" class="c-form__input c-date__input">
        <input type="date" name="" class="c-form__input c-date__input">
        <input type="date" name="" class="c-form__input c-date__input">
      </dd>
    </dl>
    <dl class="c-form__item">
      <dt class="c-form__term">お問い合わせ内容</dt>
      <dd class="c-form__desc">
        [textarea* your-comment class:c-form__textarea placeholder "ご自由にご記入ください。"]
      </dd>
    </dl>
    <div class="c-form__button-wrapper">
      [submit class:c-form__button class:c-button class:c-button--large "送 信"]
    </div>
  </div>
</div>