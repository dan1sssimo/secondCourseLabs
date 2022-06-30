
namespace Lab4
{
    partial class DialogInputForLab4Form
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.buttonOK = new System.Windows.Forms.Button();
            this.labelWeight = new System.Windows.Forms.Label();
            this.numericUpDownWeight = new System.Windows.Forms.NumericUpDown();
            ((System.ComponentModel.ISupportInitialize)(this.numericUpDownWeight)).BeginInit();
            this.SuspendLayout();
            // 
            // buttonOK
            // 
            this.buttonOK.Location = new System.Drawing.Point(12, 56);
            this.buttonOK.Name = "buttonOK";
            this.buttonOK.Size = new System.Drawing.Size(120, 53);
            this.buttonOK.TabIndex = 0;
            this.buttonOK.Text = "Підтвердити";
            this.buttonOK.UseVisualStyleBackColor = true;
            this.buttonOK.Click += new System.EventHandler(this.buttonOK_Click);
            // 
            // labelWeight
            // 
            this.labelWeight.AutoSize = true;
            this.labelWeight.Location = new System.Drawing.Point(39, 9);
            this.labelWeight.Name = "labelWeight";
            this.labelWeight.Size = new System.Drawing.Size(75, 15);
            this.labelWeight.TabIndex = 1;
            this.labelWeight.Text = "Вага ребра=";
            // 
            // numericUpDownWeight
            // 
            this.numericUpDownWeight.Location = new System.Drawing.Point(12, 27);
            this.numericUpDownWeight.Name = "numericUpDownWeight";
            this.numericUpDownWeight.Size = new System.Drawing.Size(120, 23);
            this.numericUpDownWeight.TabIndex = 2;
            this.numericUpDownWeight.Value = new decimal(new int[] {
            1,
            0,
            0,
            0});
            // 
            // DialogInputForLab4Form
            // 
            this.AcceptButton = this.buttonOK;
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(132, 113);
            this.ControlBox = false;
            this.Controls.Add(this.numericUpDownWeight);
            this.Controls.Add(this.labelWeight);
            this.Controls.Add(this.buttonOK);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MinimizeBox = false;
            this.Name = "DialogInputForLab4Form";
            this.ShowIcon = false;
            this.ShowInTaskbar = false;
            this.Text = "Вага ребра: ";
            ((System.ComponentModel.ISupportInitialize)(this.numericUpDownWeight)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button buttonOK;
        private System.Windows.Forms.Label labelWeight;
        private System.Windows.Forms.NumericUpDown numericUpDownWeight;
    }
}