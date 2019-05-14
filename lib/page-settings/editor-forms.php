<?php /**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<div class="metabox-holder">

<!-- エディター共通 -->
<div id="editor" class="postbox">
  <h2 class="hndle"><?php _e( 'エディター共通設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( '投稿・固定ページ管理画面の設定です。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>

        <!-- Gutenberg -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_GUTENBERG_EDITOR_ENABLE, __('Gutenberg', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_GUTENBERG_EDITOR_ENABLE , is_gutenberg_editor_enable(), __( 'Gutenbergエディターを有効にする', THEME_NAME ));
            generate_tips_tag(__( '無効化することで旧ビジュアルエディター形式で投稿画面が表示されます。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- エディタースタイル -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_VISUAL_EDITOR_STYLE_ENABLE, __('エディタースタイル', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_VISUAL_EDITOR_STYLE_ENABLE , is_visual_editor_style_enable(), __( 'エディターにテーマスタイルを反映させる', THEME_NAME ));
            generate_tips_tag(__( '無効にするとWordPressデフォルトのエディターになります。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- エディター色 -->
        <tr>
          <th scope="row">
            <?php generate_label_tag('', __('エディター色', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_color_picker_tag(OP_EDITOR_BACKGROUND_COLOR,  get_editor_background_color(), '背景色');

            generate_tips_tag(__( 'エディターの背景色を指定します。', THEME_NAME ));

            generate_color_picker_tag(OP_EDITOR_TEXT_COLOR,  get_editor_text_color(), '文字色');
            generate_tips_tag(__( 'エディターのテキスト色を指定します。', THEME_NAME ));
            ?>
          </td>
        </tr>

        </tbody>
    </table>

  </div>
</div>


<!-- ブロックエディター -->
<div id="block-editor" class="postbox">
  <h2 class="hndle"><?php _e( 'ブロックエディター設定', THEME_NAME ) ?></h2>
  <div class="inside">

  <table class="form-table">
    <tbody>
    <p><?php _e( 'ブロックエディターのみに適用される設定です。', THEME_NAME ) ?></p>

        <!-- スタイルドロップダウン -->
        <tr>
          <th scope="row">
            <?php generate_label_tag('', __('スタイルドロップダウン', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_BLOCK_EDITOR_INLINE_STYLE_DROPDOWN_ENABLE , is_block_editor_inline_style_dropdown_enable(), __( 'インラインスタイル表示', THEME_NAME ));
            generate_tips_tag(__( 'ツールバーのインラインスタイルドロップダウンを表示するか。', THEME_NAME ));

            generate_checkbox_tag(OP_BLOCK_EDITOR_MARKER_STYLE_DROPDOWN_ENABLE , is_block_editor_marker_style_dropdown_enable(), __( 'マーカースタイル表示', THEME_NAME ));
            generate_tips_tag(__( 'ツールバーのマーカースタイルドロップダウンを表示するか。', THEME_NAME ));

            generate_checkbox_tag(OP_BLOCK_EDITOR_BADGE_STYLE_DROPDOWN_ENABLE , is_block_editor_badge_style_dropdown_enable(), __( 'バッジスタイル表示', THEME_NAME ));
            generate_tips_tag(__( 'ツールバーのバッジスタイルドロップダウンを表示するか。', THEME_NAME ));

            generate_checkbox_tag(OP_BLOCK_EDITOR_FONT_SIZE_STYLE_DROPDOWN_ENABLE , is_block_editor_font_size_style_dropdown_enable(), __( '文字サイズスタイル表示', THEME_NAME ));
            generate_tips_tag(__( 'ツールバーの文字サイズスタイルドロップダウンを表示するか。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- ショートコードドロップダウン -->
        <tr>
          <th scope="row">
            <?php generate_label_tag('', __('ショートコードドロップダウン', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(op_block_editor_general_shortcode_dropdown_enable , is_block_editor_general_shortcode_dropdown_enable(), __( '汎用ショートコード表示', THEME_NAME ));
            generate_tips_tag(__( 'ツールバーの汎用ショートコードドロップダウンを表示するか。', THEME_NAME ));

            generate_checkbox_tag(OP_BLOCK_EDITOR_TEMPLATE_SHORTCODE_DROPDOWN_ENABLE , is_block_editor_template_shortcode_dropdown_enable(), __( 'テンプレートショートコード表示', THEME_NAME ));
            generate_tips_tag(__( 'ツールバーのテンプレートショートコードドロップダウンを表示するか。', THEME_NAME ));

            generate_checkbox_tag(OP_BLOCK_EDITOR_AFFILIATE_SHORTCODE_DROPDOWN_ENABLE , is_block_editor_affiliate_shortcode_dropdown_enable(), __( 'アフィリエイトショートコード表示', THEME_NAME ));
            generate_tips_tag(__( 'ツールバーのアフィリエイトショートコードドロップダウンを表示するか。', THEME_NAME ));

            generate_checkbox_tag(OP_BLOCK_EDITOR_RANKING_SHORTCODE_DROPDOWN_ENABLE , is_block_editor_ranking_shortcode_dropdown_enable(), __( 'ランキングショートコード表示', THEME_NAME ));
            generate_tips_tag(__( 'ツールバーのランキングショートコードドロップダウンを表示するか。', THEME_NAME ));
            ?>
          </td>
        </tr>


      </tbody>
    </table>

  </div>
</div>




<!-- 旧エディター -->
<div id="old-editor" class="postbox">
  <h2 class="hndle"><?php _e( '旧エディター設定', THEME_NAME ) ?></h2>
  <div class="inside">

  <table class="form-table">
    <tbody>
    <p><?php _e( 'ビジュアルエディター用の設定です。', THEME_NAME ) ?></p>
        <!-- 文字カウンター -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_ADMIN_EDITOR_COUNTER_VISIBLE, __('文字カウンター', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_ADMIN_EDITOR_COUNTER_VISIBLE , is_admin_editor_counter_visible(), __( 'タイトル等の文字数カウンター表示', THEME_NAME ));
            generate_tips_tag(__( 'タイトルや、SEOタイトル、メタディスクリプションの文字数を表示します。※ブロックエディターではタイトル文字数は表示されません。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 確認ダイアログ -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_CONFIRMATION_BEFORE_PUBLISH, __('確認ダイアログ', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_CONFIRMATION_BEFORE_PUBLISH , is_confirmation_before_publish(), __( 'ページ公開前に確認アラートを出す', THEME_NAME ));
            generate_tips_tag(__( '記事を投稿する前に確認ダイアログを表示します。※旧エディター用の設定', THEME_NAME ));
            ?>
          </td>
        </tr>


      </tbody>
    </table>

  </div>
</div>

</div><!-- /.metabox-holder -->
